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
                                                    <h3 class="m-t-0"><small class="text-info"><b>Buyer User Register</b></small></h3>

                                                    <div class="m-t-20">
                                                        <form action="" method="POST">

                                                        <div class="form-group">
                                                                <label>Referal Code Owner</label>
                                                                <select  name="referal_owner" id="select_user2" placeholder="Select User">
                                                                <option value=""></option>
                                                               <?=getUsers()?>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="name2">First Name/Last Name</label>
                                                                <div>
                                                                    <input type="text" id="name2" autocomplete="off" name="name2" class="form-control" required
                                                                    placeholder="Enter First Name/Last Name"/>
                                                                </div>
                                                             
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email2">User Email</label>
                                                                <div>
                                                                    <input type="text" id="email2" autocomplete="off" name="email2" class="form-control" required
                                                                    placeholder="Enter Email"/>
                                                                </div>
                                                             
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="orderid">Order Id</label>
                                                                <div>
                                                                    <input type="text" id="orderid" autocomplete="off" name="orderid" class="form-control" required
                                                                    placeholder="Enter Order Id"/>
                                                                </div>
                                                             
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="cash">Enter Cash</label>
                                                                <div>
                                                                    <input type="text" id="cash" autocomplete="off" name="cash" class="form-control" required
                                                                    placeholder="Enter Cash"/>
                                                                </div>
                                                             
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="datepicker-autoclose2">Enter Date</label>
                                                                <div>
                                                                    <input type="text" id="datepicker-autoclose2" autocomplete="off" name="date2" class="form-control" required
                                                                    placeholder="Enter Date"/>
                                                                </div>
                                                             
                                                            </div>
                                                        
                                                       
                                                       

                                                            <div class="form-group m-b-0">
                                                                <div>
                                                                    <button type="submit" name="user_referal" class="btn btn-primary waves-effect waves-light">
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