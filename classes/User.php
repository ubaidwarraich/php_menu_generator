<?php
// require 'classes/Database.php';
class User{
    private $_data;
    private $db;
    public function __construct(){
        $this->db=Database::getInstance();
    }
    private function checkUser($param){
        $data= $this->db->get('users',array('username','=','admin'));
        $this->_data=$data->results();
    }
    public function login($username,$password){
        $this->checkUser($username);
        if($this->_data[0]->username===$username)
        {
            if($this->_data[0]->password!==$password){
                throw new Exception('incorrect password');
                return;
            }
            return true;
        }
    }
    public function getId(){
        return $this->_data[0]->id;
    }
}