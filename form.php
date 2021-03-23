<?php
require_once('core/config.php');
require_once('core/functions.php');
if(!$_SESSION['logged_in']){
  header('location:login.php');
}

?>
<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8" />
        <title>Appzia - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="assets/css/selectize.default.css" rel="stylesheet" type="text/css">
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php require_once('topbar.php');?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--<div class="user-details">-->
                        <!--<div class="pull-left">-->
                            <!--<img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">-->
                        <!--</div>-->
                        <!--<div class="user-info">-->
                            <!--<div class="dropdown">-->
                                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">David Cooper <span class="caret"></span></a>-->
                                <!--<ul class="dropdown-menu">-->
                                    <!--<li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>-->
                                    <!--<li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>-->
                                    <!--<li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>-->
                                    <!--<li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>-->
                                <!--</ul>-->
                            <!--</div>-->

                            <!--<p class="text-muted m-0">Admin</p>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--- Divider -->


                    <?php require_once('sidebar.php');?>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <div class="">
                        <div class="page-header-title">
                            <h4 class="page-title">Add Referals</h4>
                        </div>
                    </div>

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">

                                        <div class="card-body">
                                          

                                            <div class="row">
                                                <div class="col-sm-6 col-xs-12">
                                                    <h3 class="header-title m-t-0"><small class="text-info"><b>Referal User Register</b></small></h3>

                                                    <div class="m-t-20">
                                                        <form class="" action="" method="POST">
                                                         

                                                            <div class="form-group">
                                                                <label for="name">User First Name/Last Name</label>
                                                                <div>
                                                                    <input type="text" id="name" autocomplete="off" name="name" class="form-control" required
                                                                    placeholder="Enter First Name/Last Name"/>
                                                                </div>
                                                             
                                                            </div>
                                                            <div class="form-group">
                                                        <label>User Date</label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" autocomplete="off" name="date" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar"></i></span>
                                                                
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>            
                                                            <div class="form-group">
                                                                <label for="email">E-Mail</label>
                                                                <div>
                                                                    <input type="text" id="email" autocomplete="off" name="email" class="form-control" required
                                                                    placeholder="Enter E-Mail"/>
                                                                </div>
                                                             
                                                            </div>


                                                            <div class="form-group">
                                                                <label for="referal_number">Discount Code</label>
                                                                <div>
                                                                    <input type="text" id="referal_number" autocomplete="off" name="referal_number" class="form-control" required
                                                                    placeholder="Enter Discount Code"/>
                                                                </div>
                                                             
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="paypal_number">Paypal Number</label>
                                                                <div>
                                                                    <input type="text" id="paypal_number" autocomplete="off" name="paypal_number" class="form-control" required
                                                                    placeholder="Enter Paypal Number"/>
                                                                </div>
                                                             
                                                            </div>

                                                            
                                                            <div class="form-group">
                                                                <label for="password">Password</label>
                                                                <div>
                                                                    <input type="password" id="password" autocomplete="off" name="password" class="form-control" required
                                                                    placeholder="Enter Password"/>
                                                                </div>
                                                             
                                                            </div>

                                                         
                                                            <div class="form-group">
                                                                <div>
                                                                    <button type="submit" name="add_referal" class="btn btn-primary waves-effect waves-light">
                                                                        Submit
                                                                    </button>
                                                                 
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>

                                           

                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end row -->

                        </div><!-- container-fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2016 - 2018 Appzia - All Rights Reserved.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/app.js"></script>

        <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>
        <script type="text/javascript" src="assets/js/selectize.js"></script>
        <script type="text/javascript">
			$(document).ready(function() {
				$('#select_user').selectize({
    create: true,
    sortField: 'text'
});
$('#select_user2').selectize({
    create: true,
    sortField: 'text'
});
$('#select_user3').selectize({
    create: true,
    sortField: 'text'
});
			});

		$('#datepicker-autoclose').datepicker({
            autoclose : true
        });
        $('#datepicker-autoclose2').datepicker({
            autoclose : true
        });
		</script>

    </body>
</html>