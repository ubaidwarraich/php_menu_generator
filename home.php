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
                    <div id="item-2" class="level-1">
                        <li class="list-group-item d-flex justify-content-between align-items-center ">
                            <div class="text-container">
                                <h6>Services</h6>
                            </div>
                            <div>
                            <button type="button" class="btn btn-primary"><i
                                            class="icofont-ui-add"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icofont-ui-edit"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icofont-ui-delete"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icofont-sub-listing"
                                        data-toggle="collapse" data-target="#item-2-1" aria-expanded="false"
                                        aria-controls="item-2-1"></i></button>
                            </div>
                        </li>
                    </div>
                    <div class="collapse" id="item-2-1">
                        <div class="form-group col-md-12">
                            <ul class="group-list">
                                <div >
                                    <li class="list-group-item d-flex justify-content-between align-items-center ">
                                        <div class="text-container">
                                            <h6>Repair</h6>
                                        </div>
                                        <div>
                                        <button type="button" class="btn btn-primary"><i
                                            class="icofont-ui-add"></i></button>
                                            <button type="button" class="btn btn-primary"><i
                                                    class="icofont-ui-edit"></i></button>
                                            <button type="button" class="btn btn-primary"><i
                                                    class="icofont-ui-delete"></i></button>
                                            <button type="button" class="btn btn-primary"><i class="icofont-sub-listing"
                                                    data-toggle="collapse" data-target="" aria-expanded="false"
                                                    aria-controls="item-1-1"></i></button>
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div> 
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