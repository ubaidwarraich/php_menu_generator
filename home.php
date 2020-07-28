<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- css files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet" />
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <!-- custom css file -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/profile.css" rel="stylesheet" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />

    <title>Profile</title>
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="section-title">

                <h3>NavBar</h3>
            </div>
        </div>
        <!-- form -->
        <form>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <h4>List of Nav-Bar Elements</h4>

                </div>
            </div>
            <!-- item 1 (level-1) -->
            <div class="form-group col-md-12">
                <ul class="list-group">
                    <div id="item-1" class="level-1">
                        <li class="list-group-item d-flex justify-content-between align-items-center ">
                            <div class="text-container">
                                <h5>Home</h5>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary"><i class="icofont-ui-edit"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icofont-ui-delete"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icofont-sub-listing"
                                        data-toggle="collapse" data-target="#item-1-1" aria-expanded="false"
                                        aria-controls="item-1-1"></i></button>

                            </div>

                        </li>
                    </div>

                    <div id="item-2" class="level-1">
                        <li class="list-group-item d-flex justify-content-between align-items-center ">
                            <div class="text-container">
                                <h5>Services</h5>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary"><i class="icofont-ui-edit"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icofont-ui-delete"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icofont-sub-listing"
                                        data-toggle="collapse" data-target="#item-2-1" aria-expanded="false"
                                        aria-controls="item-2-1"></i></button>
                            </div>
                        </li>
                    </div>
                    <div id="item-2-1" class="collapse">
                        <div class="form-group col-md-12">
                            <ul class="group-list">
                                <div id="item-2-1">
                                    <li class="list-group-item d-flex justify-content-between align-items-center ">
                                        <div class="text-container">
                                            <h5>Repair</h5>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-primary"><i
                                                    class="icofont-ui-edit"></i></button>
                                            <button type="button" class="btn btn-primary"><i
                                                    class="icofont-ui-delete"></i></button>
                                            <button type="button" class="btn btn-primary"><i class="icofont-sub-listing"
                                                    data-toggle="collapse" data-target="#item-1-1" aria-expanded="false"
                                                    aria-controls="item-1-1"></i></button>
                                        </div>
                                    </li>
                                </div>
                                <div id="item-2-2">
                                    <li class="list-group-item d-flex justify-content-between align-items-center ">
                                        <div class="text-container">
                                            <h5>destruction</h5>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-primary"><i
                                                    class="icofont-ui-edit"></i></button>
                                            <button type="button" class="btn btn-primary"><i
                                                    class="icofont-ui-delete"></i></button>
                                            <button type="button" class="btn btn-primary"><i class="icofont-sub-listing"
                                                    data-toggle="collapse" data-target="#item-1-1" aria-expanded="false"
                                                    aria-controls="item-1-1"></i></button>
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div> <!-- add button -->
                    <div id="level-1">
                        <li class="list-group-item d-flex justify-content-between align-items-center ">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" placeholder="Title">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" placeholder="Link">
                                </div>
                                <div class="form-group col-md-4">
                                    <button type="button" class="btn btn-primary"><i
                                            class="icofont-ui-add"></i></button>
                                </div>
                            </div>

                        </li>
                    </div>
                </ul>
            </div>
            <!-- save button -->
            <button type="submit" class="btn btn-primary"
                style="background-color:#4054b2; padding:0.5rem 2rem; margin-top: 1rem;"><i
                    class="icofont-ui-add"></i></button>
        </form>
    </div>
    <!-- javascript files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
</body>

</html>