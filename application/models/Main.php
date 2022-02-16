<?

    namespace application\models;
    use application\core\Model;

    class Main extends Model {
        
       
        
        public function changeProdLanguage($products, $product_langs, $lang){
            if(!empty($product_langs)){
                for($i=0;$i<count($products);$i++){
                    foreach($product_langs as $product_lang){
                        if($products[$i]['id']==$product_lang['id_product']){
                            if($product_lang['product_'.$lang]!=NULL){
                                $products[$i]["name"] = $product_lang['product_'.$lang];
                            }
                        }
                    }  
                }
            }
            return $products; 
        }
        public function changePresentLanguage($products, $product_langs, $lang){
            if(!empty($product_langs)){
                for($i=0;$i<count($products);$i++){
                    foreach($product_langs as $product_lang){
                        if($products[$i]['id']==$product_lang['id_present']){
                            if($product_lang['present_'.$lang]!=NULL){
                                $products[$i]["name"] = $product_lang['present_'.$lang];
                            }
                        }
                    }  
                }
            }
            return $products; 
        }

        public function changeProdvarsLanguage($prodvars, $prodvars_langs, $lang){
            if(!empty($prodvars_langs)){

                for($i=0;$i<count($prodvars);$i++){
                    foreach($prodvars_langs as $prodvar_lang){
                        if($prodvars[$i]['id']==$prodvar_lang['id_prodvar']){
                            if($prodvar_lang['weight_'.$lang]!=NULL && !empty(trim($prodvars[$i]['weight']))){
                                $prodvars[$i]["weight"] = $prodvar_lang['weight_'.$lang];
                            }
                            if($prodvar_lang['name_'.$lang]!=NULL && !empty(trim($prodvars[$i]['name'])) ){
                                $prodvars[$i]["name"] = $prodvar_lang['name_'.$lang];
                            }
                            if($prodvar_lang['size_'.$lang]!=NULL && !empty(trim($prodvars[$i]['size']))){
                                $prodvars[$i]["size"] = $prodvar_lang['size_'.$lang];
                            }
                        }
                    }  
                }
            }
            return $prodvars; 
        }
        public function changePresvarsLanguage($prodvars, $prodvars_langs, $lang){
            if(!empty($prodvars_langs)){
                for($i=0;$i<count($prodvars);$i++){
                    foreach($prodvars_langs as $prodvar_lang){
                        if($prodvars[$i]['id']==$prodvar_lang['id_presvar']){
                            if($prodvar_lang['weight_'.$lang]!=NULL && !empty(trim($prodvars[$i]['weight']))){
                                $prodvars[$i]["weight"] = $prodvar_lang['weight_'.$lang];
                            }
                            if($prodvar_lang['name_'.$lang]!=NULL && !empty(trim($prodvars[$i]['weight']))){
                                $prodvars[$i]["name"] = $prodvar_lang['name_'.$lang];
                            }
                            if($prodvar_lang['size_'.$lang]!=NULL && !empty(trim($prodvars[$i]['weight']))){
                                $prodvars[$i]["size"] = $prodvar_lang['size_'.$lang];
                            }
                        }
                    }  
                }
            }
            return $prodvars; 
        }

        
        public function getProdvarLangs($id_prodvar)
        {
            $params = [
                'id_prodvar' => $id_prodvar,
            ];
            $result = $this->db->all('SELECT * FROM langs_prodvars WHERE id_prodvar=:id_prodvar', $params);
            return $result;
        }
        public function getPresentLangs($id_present)
        {
            $params = [
                'id_present' => $id_present,
            ];
            $result = $this->db->all('SELECT * FROM langs_presents WHERE id_present=:id_present', $params);
            return $result;
        }
        public function getPresvarLangs($id_presvar)
        {
            $params = [
                'id_presvar' => $id_presvar,
            ];
            $result = $this->db->all('SELECT * FROM langs_presvars WHERE id_presvar=:id_presvar', $params);
            return $result;
        }

        public function getProdsLangs($products)
        {
            foreach($products as $product){
                $products_langs[] = $this->getProdLangs($product['id'])[0];
            }
            return $products_langs;
            
        }
        public function getProdvarsLangs($prodvars)
        {
            foreach($prodvars as $prodvar){
                $prodvars_langs[] = $this->getProdvarLangs($prodvar['id'])[0];
            }
            if(isset($prodvars_langs)){
                return $prodvars_langs;
            }
            
        }
        public function getPresentsLangs($presents)
        {
            foreach($presents as $present){
                $products_langs[] = $this->getPresentLangs($present['id'])[0];
            }
            return $products_langs;
            
        }
        public function getPresvarsLangs($prodvars)
        {
            foreach($prodvars as $prodvar){
                $prodvars_langs[] = $this->getPresvarLangs($prodvar['id'])[0];
            }
            if(isset($prodvars_langs)){
                return $prodvars_langs;
            }
            
        }

        public function getReviewerLangs($id_reviewer){
            $params = [
                'id_reviewer' => $id_reviewer,
            ];
            $langs = $this->db->all('SELECT * FROM langs_products WHERE id_reviewer=:id_reviewer', $params)[0];
            foreach(array_keys($langs, "") as $key){
                unset($langs[$key]);
            }
                       
            for($i=3; $i<count($langs); $i++){
                $langs_cut[explode("_", array_keys($langs, )[$i])[1]] = explode("_", array_keys($langs, )[$i])[1]; 
             }
            if(isset($langs_cut)){
                return $langs_cut;
            }else{
                return null;
            }
        }

        public function getCountry($id_reviewer){
            $marketplace = $this->oneMarcetplace($id_reviewer)[0];
            switch($marketplace['marcetplace_cut']){
                case 'de':
                    $country = 'Deutschland';
                    break;
                case 'es':
                    $country = 'España';
                    break;
                case 'it':
                    $country = 'Italia';
                    break;
                case 'fr':
                    $country = 'France';
                    break;
                case 'nl':
                    $country = 'Nederland';
                    break;
                case 'uk':
                    $country = 'United Kingdom';
                    break;
                case 'pl':
                    $country = 'Polska';
                    break;
                case 'se':
                    $country = 'Sverige';
                    break;
                default:
                    $country = "USA";
                    break;
                    }
            return $country;        
        }


        public function sendForm($post){
            $keys = "`id_reviewer`, `ip`, `name`, `mail`, `address`, `city`, `state`, `zip_code`, `country`, `phone`, `amazon_order`, `gift`";
            $values = ":id_reviewer, :ip, :name, :mail, :address, :city, :state, :zip_code, :country, :phone, :amazon_order, :gift";
            $sql = "INSERT INTO eurodu_forms ($keys) VALUES ($values)";
            $params = [
                'id_reviewer'=>$post['id_reviewer'], 
                'ip'=>$post['ip'], 
                'name'=>$post['name'], 
                'mail'=>$post['mail'], 
                'address'=>$post['address'], 
                'city'=>$post['city'], 
                'state'=>$post['state'], 
                'zip_code'=>$post['zip_code'], 
                'country'=>$post['country'], 
                'phone'=>$post['phone'], 
                'amazon_order'=>$post['amazon_order'], 
                'gift'=>$post['gift']
            ];
            return $this->db->insertID($sql, $params);
        }


        public function sendReview($post,$img){
            $keys = "`id_reviewer`, `id_form`, `ip`, `asin`, `star`, `mail`, `review`, `lang`, `img`, `link`";
            $values = ":id_reviewer, :id_form, :ip, :asin, :star, :mail, :review, :lang, :img, :link";
            $sql = "INSERT INTO `eurodu_reviews` ($keys) VALUES ($values)";
            $params = [
                'id_reviewer'=>$post['id_reviewer'], 
                'id_form'=>$post['id_form'], 
                'ip'=>$post['ip'], 
                'asin'=>$post['asin'], 
                'star'=>$post['star'], 
                'mail'=>$post['mail'], 
                'review'=>$post['review'], 
                'lang'=>$post['lang'], 
                'img'=>$img, 
                'link'=>$post['link'], 
            ];
            return $this->db->insertID($sql, $params);
        }

        public function updateReviewerForm($id_reviewer){
            $sql = "UPDATE `reviewer` SET `forms` = forms+1 WHERE `id`=:id";
            $params = [
                'id'=>$id_reviewer,
            ];
            $this->db->query($sql, $params);
        }
        public function updateReviewerVisits($id_reviewer){
            $sql = "UPDATE `reviewer` SET `visits` = visits+1 WHERE `id`=:id";
            $params = [
                'id'=>$id_reviewer,
            ];
            $this->db->query($sql, $params);
        }
        public function updateReviewerReviews($id_reviewer){
            $sql = "UPDATE `reviewer` SET reviews = reviews+1 WHERE `id`=:id";
            $params = [
                'id'=>$id_reviewer,
            ];
            $this->db->query($sql, $params);
        }
        public function getMessage($lang){
            $sql = "SELECT * FROM `reply` WHERE `lang`=:lang";
            $params = [
                'lang'=>$lang,
            ];
            $result = $this->db->all($sql, $params);
            return $result[0];
        }
        public function getForm($id_form){
            $sql = "SELECT * FROM `eurodu_forms` WHERE `id`=:id_form";
            $params = [
                'id_form'=>$id_form,
            ];
            $result = $this->db->all($sql, $params);
            return $result[0];
        }

        public function getIp(){
            $value = '';
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $value = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $value = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
                $value = $_SERVER['REMOTE_ADDR'];
            }
            return $value;
        }
        

        function renderReviewer($opinion, $route_lang=NULL){

            

            $reviewer = $this->getReviewer($opinion);
            if (isset($reviewer[0])) {
                if($reviewer[0]['id_status'] === '3'){
                    $reviewer = $reviewer[0];
                if (isset($route_lang)) {
                    $lang = $route_lang;
                } elseif (isset($reviewer['lang'])) {
                    $lang = $reviewer['lang'];
                } else {
                    if ($reviewer['id_marketplace'] == 3) {
                        $lang = 'fr';
                    } elseif ($reviewer['id_marketplace'] == 2) {
                        $lang = 'de';
                    } elseif ($reviewer['id_marketplace'] == 4) {
                        $lang = 'it';
                    } elseif ($reviewer['id_marketplace'] == 8) {
                        $lang = 'de';
                    } elseif ($reviewer['id_marketplace'] == 5) {
                        $lang = 'es';
                    } elseif ($reviewer['id_marketplace'] == 1) {
                        $lang = 'en';
                    } else {
                        $lang = 'en';
                    }
                }
                $design = $this->getDesign($reviewer['id_design'])[0];
                $design = explode('.', $design['name_design'])[0];
                $path = "application/views/" . $design . '/' . $lang;
                $layout = "application/views/layouts/" . $design . '.php';
                $baseURL = "/public/" . $design;
                $context = [
                    'design' => $design,
                    'path' => $path,
                    'layout' => $layout,
                    'baseURL' =>$baseURL,
                    'lang' => $lang,
                    'reviewer' => $reviewer,
                ];

                if(!isset($_COOKIE['new'])){
                    $this->updateReviewerVisits($reviewer['id']);
                    setcookie('new', 1);
                }
                return $context;
                }else{
                    return 0;
                }
            }else{
                return 0;
            }
        }

    }