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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <title>CreatorGem</title>

        <link rel="shortcut icon" href="assets/images/new/logo.webp">
        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">
        <link rel="assets/stylesheet" href="css/dataTables.bootstrap4.min.css">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

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
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card text-center">
                                        <div class="card-heading">
                                            <h4 class="card-title text-muted mb-0">Balance</h4>
                                        </div>
                                        <div class="card-body p-t-10">
                                            <h2 class="m-t-0 m-b-15"><b><?=getCash($_SESSION['member_id'])?>$</b></h2>
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3">
                                    <div class="card text-center">
                                        <div class="card-heading">
                                            <h4 class="card-title text-muted mb-0">Total Income</h4>
                                        </div>
                                        <div class="card-body p-t-10">
                                            <h2 class="m-t-0 m-b-15"><b><?=getCash($_SESSION['member_id'])?>$</b></h2>
                                          
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3">
                                    <div class="card text-center">
                                        <div class="card-heading">
                                            <h4 class="card-title text-muted mb-0">Buyers</h4>
                                        </div>
                                        <div class="card-body p-t-10">
                                            <h2 class="m-t-0 m-b-15"><b><?=getCount($_SESSION['member_id'])?></b></h2>
                                         
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3">
                                    <div class="card text-center">
                                        <div class="card-heading">
                                            <h4 class="card-title text-muted mb-0">Discount Code</h4>
                                        </div>
                                        <div class="card-body p-t-10">
                                            <h2 class="m-t-0 m-b-15"><b><?=getreferalCode($_SESSION['member_id'])?></b></h2>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="m-b-30 m-t-0">User List</h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table table-hover">
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
                                                        <tbody>

                                                        <?=getReferal($_SESSION['member_id'])?>
                                             
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         


                        </div><!-- container-fluid -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                     © 2021 CreatorGem - All Rights Reserved.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
		<?php include('scripts.php');?>
    </body>

<script>

$(document).ready(function(){
 
 $('#example').DataTable({
     "processing": true,
     "serverSide": true,
     "responsive": true,
     "bJQueryUI": true,
     "sDom": 'lfrtip',
     "serverMethod": "post",
     "deferRender": false,
     "ajax": "core/users.php",
     "order": [
         [0, "desc"]
     ],
     "columns": [
         { "data": "id" },
         { "data": "user_name" },
         { "data": "user_email" },
         { "data": "user_role" }
     ]
 });

});
  
</script>
</html>