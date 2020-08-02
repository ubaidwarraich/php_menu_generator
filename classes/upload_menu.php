<?php
class Menu{
    private $db,
            $menu=null,
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
    public function getMenu($user_id){
        $sql="SELECT *FROM menu WHERE user_id={$user_id} ORDER BY time DESC";
        if($result=$this->db->query($sql)){
            $row = $result -> fetch_assoc();
            return $this->menu=$row['menu'];  
        }
        return null;
    }
}
if(isset($_GET['user-id'])){
    $menu=new Menu();
    $menu->insertMenu($_GET['user-id'],$_GET['menu']);
}