<? 
namespace application\core;

use application\lib\Db;

abstract class Model{
        
    public $db;
    

    public function __construct()
    {
        $this->db = new Db;   
    }


    public function getReviewers($email){
        $params = [
            'user_mail' => $email,
        ];
        $result = $this->db->all('SELECT * FROM reviewer WHERE user_mail = :user_mail', $params);
        return $result; 
    }

    public function getReviewer($opinion){
        $params = [
            'opinion' => $opinion,
        ];
        $result = $this->db->all('SELECT * FROM reviewer WHERE opinion = :opinion', $params);
        return $result; 
    }

    public function getMarcetplace(){
        
        $result = $this->db->all('SELECT * FROM marcetplace');
        return $result; 
    }
    public function oneMarcetplace($id){
        
        $params = [
            'id'=>$id,
        ];
        $result = $this->db->all('SELECT `marcetplace_cut`, `link` FROM `marcetplace`, `reviewer` WHERE `reviewer`.`id`=:id AND `reviewer`.`id_marketplace`=`marcetplace`.`id`', $params);
        return $result; 
    }

    public function getDomains(){
        
        $result = $this->db->all('SELECT * FROM domains');
        return $result; 
    }
    public function getDomain($id){
        
        $params = [
            'id' => $id
        ];
        $result = $this->db->all('SELECT * FROM domains WHERE id=:id', $params );
        return $result; 
    }
    public function getProducts($id_review){
        $params = [
            'id_review' => $id_review,
        ];
        $result = $this->db->all('SELECT * FROM products WHERE id_review=:id_review', $params);
        return $result; 
    }
    public function getProduct($id_product){
        $params = [
            'id_product' => $id_product,
        ];
        $result = $this->db->all('SELECT * FROM products WHERE id=:id_product', $params);
        return $result[0]; 
    }
    public function getProductsForLang($asin, $id_review){
        $params = [
            'id_review' => $id_review,
            '_asin' => $asin,
        ];
        $sql = "SELECT * FROM products WHERE id_review=:id_review AND `asin`=:_asin";
        $result = $this->db->all($sql, $params);
        return $result[0]; 
    }
    public function getPresentsForLang($asin, $id_review){
        $params = [
            'id_review' => $id_review,
            '_asin' => $asin,
        ];
        $result = $this->db->all("SELECT * FROM presents WHERE id_review=:id_review AND `asin`= :_asin", $params);
        return $result[0]; 
    }
    public function getProdvarsForLang($asin, $id_review){
        $params = [
            'id_review' => $id_review,
            '_asin' => $asin,
        ];
        $result = $this->db->all("SELECT * FROM products_variations WHERE id_review=:id_review AND `asin`= :_asin", $params);
        return $result[0]; 
    }
    public function getPresvarsForLang($asin, $id_review){
        $params = [
            'id_review' => $id_review,
            '_asin' => $asin,
        ];
        $result = $this->db->all("SELECT * FROM presents_variations WHERE id_review=:id_review AND `asin`= :_asin", $params);
        return $result[0]; 
    }
    public function getProdvars($id_review){
        $params = [
            'id_review' => $id_review,
        ];
        $result = $this->db->all('SELECT * FROM `products_variations` WHERE `id_review`=:id_review', $params);
        return $result; 
    }
    public function getProdvar($id_rpdovar){
        $params = [
            'id_rpdovar' => $id_rpdovar,
        ];
        $result = $this->db->all('SELECT * FROM `products_variations` WHERE `id`=:id_rpdovar', $params);
        return $result[0]; 
    }
    public function getPresvars($id_review){
        $params = [
            'id_review' => $id_review,
        ];
        $result = $this->db->all('SELECT * FROM `presents_variations` WHERE `id_review`=:id_review', $params);
        return $result; 
    }
    public function getPresvar($id_presvar){
        $params = [
            'id_presvar' => $id_presvar,
        ];
        $result = $this->db->all('SELECT * FROM `presents_variations` WHERE `id`=:id_presvar', $params);
        return $result[0]; 
    }
    public function getPresents($id_review){
        $params = [
            'id_review' => $id_review,
        ];
        $result = $this->db->all('SELECT * FROM presents WHERE id_review=:id_review', $params);
        return $result; 
    }
    public function getPresent($id_present){
        $params = [
            'id_present' => $id_present,
        ];
        $result = $this->db->all('SELECT * FROM presents WHERE id=:id_present', $params);
        return $result[0]; 
    }
    public function getDesign($id_design){
        
        $params = [
            'id' => $id_design,
        ];
        $result = $this->db->all('SELECT name_design FROM design WHERE id=:id', $params);
        return $result; 
    }
    public function getDesignes(){
        
        $result = $this->db->all('SELECT * FROM design');
        return $result; 
    }

    public function getProdLangs($id_product)
        {
            $params = [
                'id_product' => $id_product,
            ];
            $result = $this->db->all('SELECT * FROM langs_products WHERE id_product=:id_product', $params);
            return $result;
        }
    public function getProdLangsReviewer($id_reviewer)
        {
            $params = [
                'id_reviewer' => $id_reviewer,
            ];
            $result = $this->db->all('SELECT * FROM langs_products WHERE id_reviewer=:id_reviewer', $params);
            return $result;
        }

    
}