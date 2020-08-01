<?php
class MenuInsert{
    private $menu,
            $db,
            $table='menu',
            $dberror=false;
    public function __construct(){
        $this->db=new mysqli('localhost','root','','menu_db');
        if ($this->db -> connect_errno) {
            echo "Failed to connect to MySQL: " . $this->db -> connect_error;
            echo $this->dberror=true;
            exit();
        }
    }
    public function insertMenu($user_id,$menu){
        $sql = "INSERT INTO {$this->table} (user_id, menu)
        VALUES ({$user_id}, '{$menu}')";
        if ($result = $this->db -> query($sql)) {
            echo $this->dberror=true;
            }
        $this->db -> close();
    }
}
if(isset($_GET)){
    $menu=new MenuInsert();
    $menu->insertMenu($_GET['user-id'],$_GET['menu']);
}