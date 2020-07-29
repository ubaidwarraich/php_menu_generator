<?php
class Database{
    private $host,
           $user,
           $password,
           $db,
           $error=false;
    private static $instance=null;
    private function __construct(){
        $this->host='localhost';
        $this->user='root';
        $this->password='';
        $this->db='menu_db';
        self::$instance=mysqli_connect($this->host,$this->user,$this->password,$this->db);
        if(mysqli_connect_error(self::$instance)){
            $this->error=true;
        }
    }

    public static function getInstance(){
        if(self::$instance!=null){
            return self::$instance;
        }
       return   self::$instance=new Database();
    }

    public function getError(){
        return $this->error;
    }
    }




