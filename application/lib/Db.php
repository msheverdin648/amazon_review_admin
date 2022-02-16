<? 
namespace application\lib;

use PDO;

class Db{
        protected $db;

        public function __construct()
        {
            $config = require 'application/config/db.php';
            $this -> db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'].';charset='.$config['charset'].'', $config['username'], $config['password'] );
        }

        public function query($sql, $params = []){
            $stmt = $this->db->prepare($sql);
            if(!empty($params)){
                foreach($params as $key => $val){
                    $stmt->bindValue(':'.$key, $val);
                }
            }
            $stmt->execute();
            return $stmt;   
        }
        public function insertID($sql, $params = []){
            $stmt = $this->db->prepare($sql);
            if(!empty($params)){
                foreach($params as $key => $val){
                    $stmt->bindValue(':'.$key, $val);
                }
            }
            $stmt->execute();
            return $this->db->lastInsertId();   
        }

        public function all($sql, $params = []){
            $result = $this->query($sql, $params);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        public function column($sql, $params = []){
            $result = $this->query($sql, $params);
            return $result->fetchColumn();
        }
    }