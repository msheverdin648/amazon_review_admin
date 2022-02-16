<?php
namespace application\lib;

use application\lib\Db;



class Reviewers{
    public $db;
    public $opinions;

    public function __construct()
    {
        $this->db = new Db;
        
        
    }
    
    public function getReviewers(){
        $this->opinions = $this->db->all('SELECT opinion  FROM reviewer');
        return $this->opinions;
    }
}






