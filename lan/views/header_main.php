<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>cdn/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>cdn/css/detail.css">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BASE_URL;?>cdn/fontawesome/css/all.css">
  <link rel="stylesheet" href="<?php echo BASE_URL;?>cdn/fontawesome/css/fontawesome.css">
  <link rel="stylesheet" href="<?php echo BASE_URL;?>cdn/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>cdn/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link href = "<?php echo BASE_URL;?>cdn/jquery-ui-themes-1.12.0/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
   
</head>
<body>
    <a href="#" id="back_to_top">
        <img src="img_icon/arrow-up.png" />
    </a>

    <div class="top_infor">
        <div class="container">
            <div class="col-xs-6 col-sm-6 item icon_top">
                <a href="#">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a href="#">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 item">
                <a href="#" onclick="document.getElementById('login').style.display='block'">ĐĂNG NHẬP</a>

                <a href="#" onclick="document.getElementById('sign').style.display='block'">ĐĂNG KÍ</a>

            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="after_header">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-sm-3 logo">
                    <img src="<?php echo BASE_URL;?>assets/img/logo.png">
                </div>
                <div class="col-xs-6 col-sm-6 search_new">

                    <input type="text" id="search" autocomplete="off" placeholder="Nhập từ khóa bạn muốn tìm kiếm">
                    <button type="button" class="search fas fa-search"></button>
                </div>
                <div class="store col-xs-3 col-sm-3">
                   
                        <a href="<?php echo BASE_URL;?>index/cart"> <i class="fas fa-cart-plus"> </i></a>
                   
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo BASE_URL;?>">Trang chủ</a>
                    </li>
                    <li>
                        <a href="#">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="#">Sách</a>
                    </li>
                    <li>
                        <a href="#">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>