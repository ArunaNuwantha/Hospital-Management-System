<?php error_reporting(0);?>
<header class="navbar navbar-default navbar-static-top">
    <!-- start: NAVBAR HEADER -->
    <div class="navbar-header">
        <a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle"
            data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
            <i class="ti-align-justify"></i>
        </a>
        <a class="navbar-brand" href="#">
            <h2 style="padding-top:20% ">HMS</h2>
        </a>
        <a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed"
            data-toggle-target="#app">
            <i class="ti-align-justify"></i>
        </a>
        <a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse"
            href=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <i class="ti-view-grid"></i>
        </a>
    </div>
    <!-- end: NAVBAR HEADER -->
    <!-- start: NAVBAR COLLAPSE -->
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-left">
            <!-- start: MESSAGES DROPDOWN -->
            <li style="padding-top:2% ">
                <h1 style="font-weight: bold;">Hospital Management System</h1>
            </li>
        </ul>
        <ul class="nav navbar-right">

            <li style="padding-top:2% ">
                <a class="btn btn-success" style="color:white;" href="edit-profile.php">
                    My Profile
                </a>
            </li>
            <li style="padding-top:2% ">
                <a class="btn btn-blue" style="color:white;" href="change-password.php">
                    Change Password
                </a>
            </li>
            <li style="padding-top:2% ">
                <a class="btn btn-danger" style="color:white;" href="logout.php">
                    Log Out
                </a>
            </li>

            <!-- end: USER OPTIONS DROPDOWN -->
        </ul>
        <!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
        <div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
            <div class="arrow-left"></div>
            <div class="arrow-right"></div>
        </div>
        <!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
    </div>


    <!-- end: NAVBAR COLLAPSE -->
</header>