<?php

require_once 'core/init.php';
if(isset($_GET['logout'])){
    if($_GET['logout']==true){
        if(session_destroy()){
            echo true;
        }
    }
}