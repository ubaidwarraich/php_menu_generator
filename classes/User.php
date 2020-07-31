<?php
class User{
    private $db;
    public function __construct(){
        $this->db=Database::getInstance();
    }
    private function checkUser($param){
        echo $param;
        var_dump($this->db);
        
    }
    public function login($username,$password){
        $this->checkUser($username);
    }
}