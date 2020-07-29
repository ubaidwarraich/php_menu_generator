<?php
session_start();
   require 'classes/config.php';
   require 'classes/Input.php';
   require 'classes/Validate.php';

   $db=Database::getInstance();
   $validate=new Validate();
   if(Input::exists()){
    $validation=$validate->check($_POST,array(
        'username'=>array(
            'required'=>true,
        ),
        'password'=>array(
            'required'=>true
        )
    ));
    if($validation->passed()){
        echo Input::get('username');
        if((Input::get('username')==="admin")  &&  (Input::get('password')=="admin")){
          $_SESSION["user"]=Input::get('username');
           header('Location: home.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- css files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css">
    <title>Home</title>
</head>

<body>
    <div class="main">
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="submit" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
    </div>
    <!-- javascript files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>