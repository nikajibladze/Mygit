<div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.php" class="logo"><img src="assets/images/new/logo.webp" alt="logo-img"></a>
                        <a href="index.php" class="logo-sm"><img src="assets/images/new/logo.webp" alt="logo-img"></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                

                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <ul class="list-inline menu-left mb-0">
                
                            <li class="float-left">
                                <button class="button-menu-mobile open-left waves-light waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <li class="hide-phone app-search float-left">
                                <form role="search" class="navbar-form">
                                    <input type="text" placeholder="Search..." class="form-control search-bar">
                                    <a href="#" class="btn-search"><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                        </ul>
    
                        <ul class="nav navbar-right float-right list-inline">    
                        <li class="nav navbar-right float-right list-inline new-btn-class">                              
                    
                                <a href="javascript:void(0)" class=""> <?=$_SESSION['member_username']?></a>
                              
                              </li>     
                              <li class="nav navbar-right float-right list-inline new-btn-class">                              
                        <a href="?logout=true" class=""> Logout</a>
                             
                              
                              </li>                                              
                             
                          
                        </ul>
                    </div>
                </nav>
            </div>