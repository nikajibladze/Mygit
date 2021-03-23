<?php
require_once('core/config.php');
require_once('core/functions.php');
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <title>Appzia - Responsive Admin Dashboard Template</title>

        <link rel="shortcut icon" href="assets/images/new/logo.webp">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="card">

                <div class="card-body">
                    <h3 class="text-center m-t-0 m-b-15">
                        <a href="index.html" class="logo"><img src="assets/images/new/logo.webp" alt="logo-img"></a>
                    </h3>
                    <h4 class="text-muted text-center m-t-0"><b>Sign Up</b></h4>

                    <form class="form-horizontal m-t-20" id="register_form" action="" method="post">

                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" type="email" name="user_email" required="" autocomplete="off" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" type="text" name="user_name" required="" autocomplete="off" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" type="password" name="user_password" required="" autocomplete="off" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-signup" type="checkbox" require>
                                    <label for="checkbox-signup">
                                        I accept <a href="#">Terms and Conditions</a>
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-12">
                                <div class="btn btn-primary btn-block btn-lg waves-effect waves-light" onclick="register_user()" type="button">Register</div>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">
                            <div class="col-sm-12 text-center">
                                <a href="pages-login.html" id="test" class="text-muted">Already have account?</a>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/fastclick.js"></script>

   
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>

        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/script.js"></script>

    </body>

</html>