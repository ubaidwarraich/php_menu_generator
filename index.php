<?php
require_once 'core/init.php';
    $db =Database::getInstance();
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
      $user=new User;
      if($user->login(Input::get('username'),Input::get('password')))
      {
        $_SESSION['user']=Input::get('username');
        header('Location: home.php?id='.$user->getId());
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
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="submit" value="Log In">
    </form>
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
  </div>
</div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>