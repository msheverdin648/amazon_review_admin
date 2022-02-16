<?
    namespace application\models;
    use application\core\Model;

    class Admin extends Model {

        public function DeleteReviewer($opinion){
            $params = [
                'opinion' => $opinion,
            ];
            $sql = "DELETE FROM reviewer WHERE opinion=:opinion";
            $this->db->query($sql, $params);
        }


        public function getProp($name, $i){
            if(isset($_POST[$name][$i])){
                return trim($_POST[$name][$i]);
            }else{
                return "";
            }
        }
        public function getProp2($name, $i, $j){
            if(isset($_POST[$name][$i])){
                return $this->parseArr($_POST[$name][$i], $j);
            }else{
                return "";
            }
        }

      public function hasVariations($product){
            foreach($product as $prod){
                if($prod['variate']==1){
                    return 1;
                    exit;
                }
            }
            return 0;
        }
        

        public function step1Validate($post){
            $params = [
                'opinion' => $post['opinion']
            ];
            $reviewer = $this->db->all("SELECT opinion FROM reviewer WHERE opinion=:opinion", $params);

            if(empty($reviewer) || isset($_SESSION['edit'])){
                
                for ($i=0;$i<count($post['ASIN']);$i++) {
                    $products['product.'.$i]=array(
                        "name" => $post['name'][$i],
                        "ASIN" => $post['ASIN'][$i],
                        "img" => $post['img'][$i],
                        "variate" => $post['variate'][$i],
                    );
                }
                for ($i=0;$i<count($post['present_name']);$i++) {
                    if(!empty(trim($post['present_ASIN'][$i]))){
                        $asin = $post['present_ASIN'][$i];   
                    }else{
                        $asin = 'empty.'.$i;
                    }
                    $presents['present.'.$i]=array(
                        "name" => $post['present_name'][$i],
                        "ASIN" => $asin,
                        "img" => $post['present_img'][$i],
                        "variate" => $post['present_var'][$i],
                    );
                }

                $_SESSION['presents'] = $presents;
                $_SESSION['products'] = $products;     
                return true;
                exit;
            }else{
                return false;
                exit;
            }
        }

        public function parseArr($arr, $i){
            if($i<count($arr)){
                return trim($arr[$i]);
            }       

        }


        public function step2Validate($post){

            if(isset($post['ASIN'])){
                $k=0;
                foreach($post['ASIN'] as $key=>$var){
                    for($j=0;$j<count($post['ASIN'][$key]);$j++){
                        $product_variations["product_var.".$k]=array(
                            "ASIN" => $this->getProp2('ASIN', $key, $j),
                            "img" => $this->getProp2('img', $key, $j),
                            "color" => $this->getProp2('color', $key, $j),
                            "weight" => $this->getProp2('weight', $key, $j),
                            "name" => $this->getProp2('name', $key, $j),
                            "size" => $this->getProp2('size', $key, $j),
                            "parent_ASIN" => $this->getProp2('parent_ASIN', $key, $j),
                        );
                        $k++;
                    }
                }
            }
            
            if(isset($post['present_img'])){
                $k=0;
                foreach($post['present_img'] as $key=>$var){
                    for($j=0;$j<count($post['present_ASIN'][$key]);$j++){
                        $present_variations["present_var.".$k]=array(
                            "ASIN" => $this->getProp2('present_ASIN', $key, $j),
                            "img" => $this->getProp2('present_img', $key, $j),
                            "color" => $this->getProp2('present_color', $key, $j),
                            "weight" => $this->getProp2('present_weight', $key, $j),
                            "name" => $this->getProp2('present_name', $key, $j),
                            "size" => $this->getProp2('present_size', $key, $j),
                            "parent_ASIN" => $this->getProp2('present_parent_ASIN', $key, $j),
                        );
                        $k++;
                    }
                }
            }
            
            if(isset($present_variations)){
                $_SESSION['present_variations'] = $present_variations;
            }
            if(isset($product_variations)){
                $_SESSION['product_variations'] = $product_variations;
            }
            
        }

        //Создание отзывника
      public function createReviewer($_values)
        {

            $keys = '`user_mail`, `id_design`, `email`, `id_domain`, `review_link`,`opinion`, `id_marketplace`, `id_status`';
            $values = ":email, :id_design, :post_email, :id_domain, :review_link, :opinion, :id_marketplace, :id_status";
            $params = [
                'email' => $_values['email'],
                'id_design' => $_values['id_design'],
                'post_email' => $_values['post_email'],
                'id_domain' => $_values['id_domain'],
                'review_link' => $_values['review_link'],
                'opinion' => $_values['opinion'],
                'id_marketplace' => $_values['id_marketplace'], 
                'id_status' => $_values['id_status']
            ];
            $sql = "INSERT INTO `reviewer` (".$keys.")  VALUES (".$values.")";

            return $this->db->insertID($sql, $params);
        }

      public function getId($table, $key, $value)
        {
            $params = [
                $key =>  $value,
            ];

            $sql = "SELECT `id` FROM `".$table."` WHERE `".$key."` = ':".$key."' LIMIT 1 ";
             $id = $this->db->all("SELECT `id` FROM `".$table."` WHERE `".$key."` = :$key LIMIT 1 ", $params); 
            if(!empty($id)){
                $id = $id[0]['id'];
            }
             return $id;
        }



      public function sendReq($array, $name_table, $id_reviewer){
        $id = array();
            foreach ($array as $product) {
                $i = 0;
                $keys = [];
                $values = [];
                $keys_val = [];
                foreach ($product as $key => $value) {
                    $keys[$i] = "`" . $key . "`";
                    $keys_val[$i] = ":" . $key;
                    $values[$i] = $value;
                    $i++;
                }
                $params = [
                    'id_reviewer' => $id_reviewer,
                ];
                foreach($keys_val as $key=>$val){
                    $params += [
                        trim($val, ':') => $values[$key],
                    ];
                }
                $keys = implode(',', $keys);
                $values = implode(',', $values);
                $keys_val = implode(',', $keys_val);
                
                $sql = "INSERT INTO `$name_table` (`id_review`, $keys)  VALUES (:id_reviewer, $keys_val)";

                $id[] =  $this->db->insertID($sql, $params);
            }
            return $id;
        }

      public function createLangs($table, $name, $id, $id_reviewer){
            $params = [
                'id' => $id,
                'id_reviewer' => $id_reviewer,
            ];
            $sql = "INSERT INTO `langs_"."$table` (`id_"."$name`, `id_reviewer`)  VALUES (:id, :id_reviewer)";
            $output_id[] =  $this->db->insertID($sql, $params);    
        }

      public function updateLangReveiwer($id_reviewer, $main_lang){
            $params = [
                'lang' => $main_lang,
                'id' => $id_reviewer
            ];
            $sql = "UPDATE `reviewer` SET `lang` = :lang WHERE `id` = :id";
            $this->db->query($sql, $params);
        }

      public function updateMainLang($table, $key, $lang, $value, $id_prod){
            $params = [
                'value' => $value,
                'id' => $id_prod
            ];
            $sql = "UPDATE `$table` SET `$key"."_".$lang."` = :value WHERE `id_".$key."`=:id";
            $this->db->query($sql, $params);
        }
      public function UpdateMain($table, $value, $id_prod){
            $params = [
                'value' => $value,
                'id' => $id_prod
            ];
            $sql = 'UPDATE '.$table.' SET `name` = :value WHERE id=:id';
            $this->db->query($sql, $params);
        }


      public function updateVarsLang($table, $key, $lang, $weight, $name, $size, $id_prod){
            $params = [
                'weight' => $weight,
                'name' => $name,
                'size' => $size,
                'id' => $id_prod
            ];
            $sql = "UPDATE `$table` SET `weight"."_".$lang."` = :weight, `name"."_".$lang."` = :name , `size"."_".$lang."` = :size WHERE `id_".$key."`= :id";
            
            $this->db->query($sql, $params);
        }
      public function updateVars($table, $weight, $name, $size, $id_prod){
            $params = [
                '_weight' => $weight,
                '_name' => $name,
                '_size' => $size,
                'id' => $id_prod
            ];
            $sql = "UPDATE `$table` SET `weight` = :_weight, `name` = :_name , `size` = :_size WHERE `id`= :id";
            
            $this->db->query($sql, $params);
        }
        

      public function getLangsProd($id){

            $params = [
                'id' => $id
            ];
            $sql = "SELECT * FROM `langs_products` WHERE `id_reviewer`= :id";
            return $result = $this->db->all($sql, $params);
        }   
      public function getLangsProdvars($id){
            $params = [
                'id' => $id
            ];
            $sql = "SELECT * FROM `langs_prodvars` WHERE `id_reviewer`= :id";
            return $result = $this->db->all($sql, $params);
        }   
      public function getLangsPresents($id){
            $params = [
                'id' => $id
            ];
            $sql = "SELECT * FROM `langs_presents` WHERE `id_reviewer`= :id";
            return $result = $this->db->all($sql, $params);
        }   
      public function getLangsPresvars($id){
            $params = [
                'id' => $id
            ];
            $sql = "SELECT * FROM `langs_presvars` WHERE `id_reviewer`= :id";
            return $result = $this->db->all($sql, $params);
        }  

    public function get($table, $key, $value){

        $params = [
            $key => $value,
        ];
        $sql = "SELECT * FROM $table WHERE $key =:$key";
        return $this->db->all($sql, $params)[0];
        

    }


    //Изменение отзовника
  public function updateReviewer($name_table, $values, $id)
    {
        $params = [
            'id' => $id,
        ];
        $keys = [];
        foreach(explode(',', $values) as $val){
            $params += [
                trim(str_replace('`', '', explode('=', $val)[0])) => trim(str_replace('\'', '', explode('=', $val)[1])),
            ]; 
        }
        foreach(explode(',', $values) as $val){
            array_push($keys,trim(str_replace('`', '', explode('=', $val)[0]))."=:".trim(str_replace('`', '', explode('=', $val)[0])) );
        }
        
        $keys = implode(', ', $keys);
        $sql = "UPDATE `$name_table` SET $keys WHERE `id` = :id";
        $this->db->query($sql, $params);
    }
    //Удаление
  public function deleteProd($name_table, $id)
    {
        $params = [
            'id' => $id,
        ];
        $sql = "DELETE FROM `$name_table`  WHERE `id`=:id";
        $this->db->query($sql, $params);
    }
    //Добавление новых товаров
  public function insertProd($name_table, $keys, $values)
    {
        $sql_val = [];
        foreach(explode(',', $keys) as $val){
            array_push($sql_val, ":".trim(str_replace('`', '', $val)));
        }
        

        $params = [

        ];
        foreach(explode(',', $values) as $key=>$val){
            $params += [trim(str_replace('`', '', explode(',', $keys)[$key])) => trim(str_replace('\'', '', $val)),];
        }
        $sql_val = implode(', ', $sql_val);
        $sql = "INSERT INTO  `$name_table` ($keys) VALUES ($sql_val)";
        return $this->db->insertID($sql, $params);
        
    }

    public function changeStatus($opinion, $status){
        $params = [
            'opinion' => $opinion,
            'id_status' => $status
        ];
        $sql = 'UPDATE reviewer SET id_status=:id_status WHERE opinion=:opinion';
        $this->db->query($sql, $params);
    }

    public function getReviews($id){
        $params = [
            'id' => $id,
        ];
        $sql = 'SELECT * FROM eurodu_reviews WHERE id_reviewer=:id ';
        return $this->db->all($sql, $params);
    }
    public function getReviewsOnId($id){
        $params = [
            'id' => $id,
        ];
        $sql = 'SELECT * FROM eurodu_reviews WHERE id=:id ';
        return $this->db->all($sql, $params);
    }
    public function getForms($id){
        $params = [
            'id' => $id,
        ];
        $sql = 'SELECT * FROM eurodu_forms WHERE id_reviewer=:id ';
        return $this->db->all($sql, $params);
    }
    public function reviewToArchive($id){
        $params = [
            'id' => $id,
        ];
        $sql = 'UPDATE eurodu_reviews SET archive="1" WHERE id=:id';
        return $this->db->all($sql, $params);
    }

    public function formToArchive($id){
        $params = [
            'id' => $id,
        ];
        $sql = 'UPDATE eurodu_forms SET archive="1" WHERE id=:id';
        return $this->db->all($sql, $params);
    }

    public function step2LangsValidate($post){

        if(isset($post['ASIN'])){
            $k=0;
            foreach($post['ASIN'] as $key=>$var){
                for($j=0;$j<count($post['ASIN'][$key]);$j++){
                    $product_variations["product_var.".$k]=array(
                        "ASIN" => $this->getProp2('ASIN', $key, $j),
                        "img" => $this->getProp2('img', $key, $j),
                        "color" => $this->getProp2('color', $key, $j),
                        "weight" => $this->getProp2('weight', $key, $j),
                        "name" => $this->getProp2('name', $key, $j),
                        "size" => $this->getProp2('size', $key, $j),
                        "parent_ASIN" => $this->getProp2('parent_ASIN', $key, $j),
                    );
                    $k++;
                }
            }
        }
        
        if(isset($post['present_img'])){
            $k=0;
            foreach($post['present_img'] as $key=>$var){
                for($j=0;$j<count($post['present_ASIN'][$key]);$j++){
                    $present_variations["present_var.".$k]=array(
                        "ASIN" => $this->getProp2('present_ASIN', $key, $j),
                        "img" => $this->getProp2('present_img', $key, $j),
                        "color" => $this->getProp2('present_color', $key, $j),
                        "weight" => $this->getProp2('present_weight', $key, $j),
                        "name" => $this->getProp2('present_name', $key, $j),
                        "size" => $this->getProp2('present_size', $key, $j),
                        "parent_ASIN" => $this->getProp2('present_parent_ASIN', $key, $j),
                    );
                    $k++;
                }
            }
        }
        
        if(isset($present_variations)){
            $_SESSION['present_variations'] = $present_variations;
        }
        if(isset($product_variations)){
            $_SESSION['product_variations'] = $product_variations;
        }
        
    }
        
}