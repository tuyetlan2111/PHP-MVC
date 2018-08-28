

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Danh sách sản phẩm</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="myAdmin - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



   <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>cdn/css/form.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>cdn/css/theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>cdn/css/style.css">
  
    <link rel="stylesheet" href="<?php echo BASE_URL;?>cdn/fontawesome/css/all.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>cdn/fontawesome/css/fontawesome.css">
     <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>cdn/select2/select2.min.css"> 






</head>
<body class="dashboard-page with-customizer">
<div id="main">
    <header class="navbar navbar-fixed-top">
        <div class="navbar-logo-wrapper dark bg-dark">
            <!-- <a class="navbar-logo-image" href="index.html">
                <img src="http://myadmin-html.axiomthemes.com/assets/img/logo.png" alt="" class="sb-l-o-logo">
                <img src="http://myadmin-html.axiomthemes.com/assets/img/logo_small.png" alt="" class="sb-l-m-logo">
            </a> -->
        </div>
        <span id="sidebar_left_toggle" class="ad ad-lines navbar-nav navbar-left"></span>
        <form class="navbar-form navbar-left search-form square" role="search">
            <div class="input-group add-on">

                <input type="text" class="form-control" placeholder="Search" onfocus="this.placeholder=''"
                       onblur="this.placeholder='Search'">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>

            </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown dropdown-fuse">
                <a href="#" class="dropdown-toggle mln" data-toggle="dropdown">
                    <!-- <span class="hidden-xs hidden-sm"><span class="name">John Iverson</span> </span> -->
                    <span class="fa fa-caret-down hidden-xs hidden-sm"></span>
                    <!-- <span class="profile-online">
                        <img src="http://myadmin-html.axiomthemes.com/assets/img/avatars/profile_avatar.jpg" alt="avatar">
                    </span> -->
                </a>
            </li>
            <li class="list-group-item">
                <a href="#">Đăng xuất<span class="fa fa-sign-out"></span> </a>
            </li>
        </ul>
    </header>
    <aside id="sidebar_left" class="nano nano-light affix">
        <div class="sidebar-left-content nano-content">
            <header class="sidebar-header">
                <div class="sidebar-widget author-widget">
                    <div class="media">
                        <!-- <a class="media-left profile-online" href="#">
                            <img src="http://myadmin-html.axiomthemes.com/assets/img/avatars/profile_avatar.jpg" class="img-responsive" alt="">
                        </a> -->

                        <div class="media-body">
                            <div>Xin chào</div>
                            <div class="media-author">Tuyết Lan</div>
                        </div>
                    </div>
                </div>

            </header>
            <ul class="nav sidebar-menu">
                <li class="active">
                    <a href="<?php echo BASE_URL;?>admin">
                        <span class="sidebar-title">Quản lý chung</span>
                        <span class="sb-menu-icon fa fa-home"></span>
                    </a>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="sidebar-title">Sản phẩm</span>
                        <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-share-square-o"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="<?php echo BASE_URL;?>admin/view_book">
                               Danh sách sản phẩm
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL;?>books/add_book">
                               Sản phẩm
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="sidebar-title">Quản lý kho</span>
                        <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-share-square-o"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="<?php echo BASE_URL;?>import/show">
                               Nhập kho
                            </a>
                        </li>
                        <li>
                            <a href="admin/add_product">
                               Xuất kho
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="sidebar-title">Thành viên</span>
                        <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-share-square-o"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="<?php echo BASE_URL;?>users/show_customer">
                              Khách hàng
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL;?>users/show_employee">
                              Nhân viên
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>