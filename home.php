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
    <div class="form-row">
                <div class="form-group col-md-4">
                    <h6 class="menu-heading">Navigation Structure</h6>
                </div>
            </div>
            <!-- add button -->

                            <div class="form-row add-form">
                                <div class="form-group col-md-4">
                                    <input type="text" id="value" class="form-control" placeholder="Title">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text"  id="link" class="form-control" placeholder="Link">
                                </div>
                                <div class="form-group col-md-4">
                                    <button type="button" id="add-btn" class="btn btn-primary"><i
                                            class="icofont-ui-add"></i></button>
                                </div>
                            </div>
        <!-- form -->
        <form>
            <!-- item 1 (level-1) -->
            <div class="form-group col-md-12">
                <ul class="list-group ul-items">
                    
                </ul>
            </div>
            <!-- save button -->
            <input type="submit" value="Save Menu"   class="btn btn-primary" id="save-btn" style=" padding:0.5rem 2rem; margin-top: 1rem; border:none; color:#fff;" >
        </form>
    </div>
    <!-- javascript files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="app.js"></script>
</body>

</html>