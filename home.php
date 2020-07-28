<?php

require 'classes/config.php';

$db=Database::getInstance();
if(!$db->getError()){
    echo 'success in connection';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        form{
            display:flex;
            flex-direction:row;
            margin-left:20px;
        }
        li{
            list-style-type:none;
        }
    </style>
</head>
<body>
    <form action="">
        <input type="text" name="" id="value">
        <input type="submit" id="add-btn"value="Add">
        <input type="submit" value="save">
    </form>

    <ul id="list-menu-items">

    </ul>
    <script src="app.js"></script>
</body>
</html>