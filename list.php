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
                                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="m-b-30 m-t-0">Users List</h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <table id="full_user_table" class="table table-hover">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>E-Mail</th>
                                                            <th>Order Id</th>
															 <th>Cash</th>
															  <th>Date</th>
                                                        </tr>
                                                        </thead>
                                                       
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
      <?php include('scripts.php');?>
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