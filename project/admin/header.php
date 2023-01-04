<?php
include 'db.php';
session_start();

if(!isset($_SESSION['user']))
{
	header("location:login.php");
	
}

$data= $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    
<head>
        <meta charset="UTF-8">
        <title>Softanic News</title>
        <link rel="shortcut icon" href="dist/images/favicon.ico" />
        <meta name="viewport" content="width=device-width,initial-scale=1"> 

        <!-- START: Template CSS-->
        <link rel="stylesheet" href="dist/vendors/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="dist/vendors/simple-line-icons/css/simple-line-icons.css">        
        <link rel="stylesheet" href="dist/vendors/flags-icon/css/flag-icon.min.css">         
        <!-- END Template CSS-->

        <!-- START: Page CSS-->
        <link rel="stylesheet"  href="dist/vendors/chartjs/Chart.min.css">
        <!-- END: Page CSS-->

        <!-- START: Page CSS-->   
        <link rel="stylesheet" href="dist/vendors/morris/morris.css"> 
        <link rel="stylesheet" href="dist/vendors/weather-icons/css/pe-icon-set-weather.min.css"> 
        <link rel="stylesheet" href="dist/vendors/chartjs/Chart.min.css"> 
        <link rel="stylesheet" href="dist/vendors/starrr/starrr.css"> 
        <link rel="stylesheet" href="dist/vendors/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="dist/vendors/ionicons/css/ionicons.min.css"> 
        <link rel="stylesheet" href="dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css">
        <!-- END: Page CSS-->

        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="dist/css/main.css">
        <!-- END: Custom CSS-->
    </head>
    <!-- END Head-->

    <!-- START: Body-->
    <body id="main-container" class="default">

        <!-- START: Pre Loader-->
        <div class="se-pre-con">
            <div class="loader"></div>
        </div>
        <!-- END: Pre Loader-->

        <!-- START: Header-->
        <div id="header-fix" class="header fixed-top">
            <div class="site-width">
                <nav class="navbar navbar-expand-lg  p-0">
                    <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">  
                        <a href="index.php" class="horizontal-logo text-left">
                            <span class="h4 font-weight-bold align-self-center mb-0 ml-auto">softanic</span>              
                        </a>                   
                    </div>
                    <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar">
                        <a href="#" class="sidebarCollapse" id="collapse"><i class="icon-menu"></i></a>
                    </div>

                    <form class="float-left d-none d-lg-block search-form">
                        <div class="form-group mb-0 position-relative">
                            <input type="text" class="form-control border-0 rounded bg-search pl-5" placeholder="Search anything...">
                            <div class="btn-search position-absolute top-0">
                                <a href="#"><i class="h6 icon-magnifier"></i></a>
                            </div>
                            <a href="#" class="position-absolute close-button mobilesearch d-lg-none" data-toggle="dropdown" aria-expanded="false"><i class="icon-close h5"></i>                               
                            </a>

                        </div>
                    </form>
                    <div class="navbar-right ml-auto h-100">
                        <ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">
                            <li class="d-inline-block align-self-center  d-block d-lg-none">
                                <a href="#" class="nav-link mobilesearch" data-toggle="dropdown" aria-expanded="false"><i class="icon-magnifier h4"></i>                               
                                </a>
                            </li>                        

                            
                            <li class="dropdown user-profile align-self-center d-inline-block">
                                <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false"> 
                                    <div class="media">                                   
                                        <img src="dist/images/author.jpg" alt="" class="d-flex img-fluid rounded-circle" width="29">
                                    </div>
                                </a>

                                <div class="dropdown-menu border dropdown-menu-right p-0">
                                    <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                        <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                    <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                        <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                        <span class="icon-settings mr-2 h6 mb-0"></span> Account Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="logout.php" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                        <span class="icon-logout mr-2 h6  mb-0"></span> Sign Out</a>
                                </div>

                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- END: Header-->

        <!-- START: Main Menu-->
        <div class="sidebar">
            <div class="site-width">
                <!-- START: Menu-->
                <ul id="side-menu" class="sidebar-menu">
                    <li class="dropdown active"><a href="#"><i class="icon-home mr-1"></i> News</a>                  
                        <ul>
                            <li class="active"><a href="index.php"><i class="icon-rocket"></i> Dashboard</a></li>
                            <li><a href="news-add.php"><i class="icon-layers"></i> Add News</a></li>
                            <li><a href="news.php"><i class="icon-grid"></i> View All</a></li>
                            
                        </ul>
                    </li>
                    
                                    </ul>
                <!-- END: Menu-->
 
