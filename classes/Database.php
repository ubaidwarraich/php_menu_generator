<?php
class Database{
    private static $_instance;
    public $_error;
    private function __construct(){
        self::$_instance = new mysqli("localhost","root","","menu_db");
        // prepare and bind
        $me='admin';
        $stmt = self::$_instance->prepare("Select *from users where username=?");
        $stmt->bind_param("s",$me);
        $stmt->execute();
        $result = $stmt->get_result(); // get the mysqli result
        $user = $result->fetch_assoc();
        var_dump($user['username']);
        // Check connection
        if (self::$_instance -> connect_errno) {
            echo $this->_error='Error: ' . self::$_instance -> connect_error;
            exit();
        }
    }
    public static function getInstance(){
        if(self::$_instance==null){
            return self::$_instance=new Database();
        }
        return self::$_instance;
    }
    public function get($table,$field,$param){

    }
}