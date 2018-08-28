<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Giao diện trang quản trị</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="myAdmin - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="http://myadmin-html.axiomthemes.com/assets/fonts/icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" href="http://myadmin-html.axiomthemes.com/assets/js/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="http://myadmin-html.axiomthemes.com/assets/js/plugins/magnific/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="http://myadmin-html.axiomthemes.com/assets/js/plugins/c3charts/c3.min.css">
    <link rel="stylesheet" type="text/css" href="http://myadmin-html.axiomthemes.com/assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="../cdn/css/form.css">
    <link rel="stylesheet" type="text/css" href="../cdn/css/theme.css">
</head>


<?php require_once __DIR__ ."/header.php";?>

    <section id="content_wrapper">

        <!-- Topbar -->
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-icon">
                        <a href="index.html">
                            <span class="fa fa-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-link">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">Lịch</li>
                </ol>
            </div>
        </header>

        <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center ph45">

                <!-- Calendar -->
                <div id="calendar" class="events-calendar"></div>

            </div>

            <aside class="chute chute-right chute-icon-style chute290 taphover chute-hidden-xs" data-chute-mobile="#content > .chute-center" data-chute-height="match">
                <div class="chute-icon"></div>
                <div class="chute-of-ht"></div>
                <div class="scroller-chute scroller-primary chute-fh-xs mrn">
                    <div class="fc-title-clone"></div>

                    <div class="section allcp-form theme-primary">
                        <div class="inline-mp minimal-mp center-block"></div>
                    </div>
                </div>
            </aside> 
        </section>

    </section>
</div>

        <!-- <form method="post" action="/" id="calendarManagmentForm">
        </form> -->
    </div>
</div>

<?php require_once __DIR__ ."/footer.php";?>


