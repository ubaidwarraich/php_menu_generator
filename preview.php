<?php
require './classes/upload_menu.php';
require_once 'core/init.php';
$GLOBALS['menu']=null;
if(!isset($_SESSION['user'])){
    header('Location: index.php?error=youAreNotLoggedIn');
}
else{
    $user=new User();
    $user->checkUser($_SESSION['user']);
    if(!($user->getId())){
        header('Location: index.php?error=UserNotFound');
    }
    else{
        $menu=new Menu;
        $menu_json=$menu->getMenu($user->getId());
        $GLOBALS['menu']=json_decode( $menu_json);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css">
    <title>Preview Menu</title>
</head>
<body>
    <div class="nav-markup">
        <nav class="navbar navbar-expand-sm   navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse bg-secondary" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <?php
                        foreach($GLOBALS['menu'] as $menu_item)
                        {
                            if($menu_item->sub_items)
                            {
                                echo '
                                    <li class="nav-item dropdown dmenu">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                            '.$menu_item->text.'
                                        </a>
                                        <div class="dropdown-menu sm-menu">
                                    ';
                                        foreach($menu_item->sub_items as $item){
                                            echo '
                                            <a class="dropdown-item" href="#">'.$item->text.'</a>
                                            ';
                                        }
                                        echo '
                                        </div>
                                    </li>
                                    ';   
                            }
                            else{
                                echo ' 
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">'.$menu_item->text.'</a>
                                    </li>
                                ';
                            }
                        }
                    ?>
                </ul>
            </div>
        </nav>
    </div>
    <h2 class="d-flex justify-content-center heading" style="color:#111;">HTML MARKUP</h2>
    <div class="d-flex justify-content-center">
        <textarea name="" id="nav-markup" cols="100" rows="20"></textarea>
    </div>
    <!-- javascript files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.navbar-light .dmenu').hover(function () { 
                $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
            }, function () {
                $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
            });
        });
        document.querySelector('#nav-markup').value=(document.querySelector('.nav-markup').innerHTML).trim();
</script>

</body>
</html>