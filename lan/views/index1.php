
<?php require_once __DIR__ ."/header_main.php";?>
    <section>
 
        <div class="carousel slide" id="myCarousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="assets/img/slide1.jpg">
                    <div class="caption_slide">
                        <h1>Mỗi cuốn sách là một bức tranh kì dịu về cuộc sống</h1>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/img/slide2.jpg">
                    <div class="caption_slide">
                        <h1>Lí tưởng là cuốn sách không có trật tự gì cả và người đọc phải tự khám phá ra cho mình.
                        </h1>
                    </div>
                </div>
                <div class="item active">
                    <img src="assets/img/slide3.jpg">
                    <div class="caption_slide">
                        <h1>Sách là nguồn của cải quý báu của thế giới và là di sản xứng đáng của các thế hệ và các quốc gia.</h1>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <div class="container body">
        <div class="col-md-2 left_body">
       
            <div id="book-list" class="content">
                 <div id="category-list" class="col-xs-12 col-sm-12 col-md-12 content">
<?php
$result=" ";
  if(isset($ds_category_home)) {
       for ($i = 0; $i < count($ds_category_home); $i++) {
        $result .= '<h1><a href ="categories/category?id=' . $ds_category_home[$i]['id'] . '" target=”_blank">' . $ds_category_home[$i]['name_cate'] . '</a></h1>';
       }
       echo $result;
    }
?>

      </div>
            <div class="col-md-12 group_price">
                    <h2 class="title">Tìm kiếm theo giá</h2>
                    <p>
                        <input type="text" id="amount">
                    </p>
                    <div id="slider-range"></div>
                    <button type="submit" name="filter_price">Tìm kiếm</button>
            </div>

            <div class="col-md-12  support">
                <h2 class="title"> Hỗ trợ trực tuyến </h2>
                <p>
                    <a href="www.gmail.com">
                        <img src="assets/img_icon/phone.png"> 0988.458.350
                    </a>

                    <p>
                        <a href="www.gmail.com">
                            <img src="assets/img_icon/mail.png"> tuyetlan2111@gmail.com
                        </a>
                    </p>
                    <p>
                        <a href="www.facebook.com">
                            <img src="assets/img_icon/facebook.png"> Tuyết Lan </a>
                    </p>
            </div>
          
       
    
</div>
</div>
        <div class="col-md-10 right_body">
        <div class="col-md-12 nd">
            <div class="intro_best">
                <h2 class="title">Sản phẩm bán chạy</h2>
                <div id="book-list" class="content">
                <?php
            $result=" ";
            if (isset($ds_book)){
                
               for($i= 0; $i < 8 ; $i++){
                    $result .= '<div id="book_item_' . $ds_book[$i]['id_book'] . '" class= "col-md-3 item">';
                    $result .= '<a href ="books/details?id=' . $ds_book[$i]['id_book'] . '"><img src="http://localhost:8012/lan/assets/img/' . $ds_book[$i]['img_front']. '"></a>';
                    $result .= '<a href ="books/details?id=' . $ds_book[$i]['id_book'] . '"><h3 class="content"> ' . $ds_book[$i]['name'] . '</h3></a>';
                    $result .= '<p>' .$ds_book[$i]['price']. '</p>';
                    $result .= '<i onclick="http://localhost:8012/lan/index/cart(' . $ds_book[$i]['id_book'] . ')" class="fas fa-cart-plus cart" data-toggle="modal" data-target="#myModal"></i></div>';
  
    }
               echo $result;
            }
?>
                </div>



            </div>

            <div class="intro_best">
                <h2 class="title">Sản phẩm đang giảm giá</h3>
            </div>
            <div class="intro_best">
                <h2 class="title">Sản phẩm mới</h3>
            <div id="book-list" class="content">
                <?php
            $result=" ";
            if (isset($book_new)){
                $max = count($book_new) >= 8 ? 8 : count($book_new);
               for($i= 0; $i < $max ; $i++){
                    $result .= '<div id="book_item_' . $book_new[$i]['id_book'] . '" class= "col-md-3 item">';
                    $result .= '<a href ="books/details?id=' . $book_new[$i]['id_book'] . '"><img src="http://localhost:8012/lan/assets/img/' . $book_new[$i]['img_front']. '"></a>';
                    $result .= '<a href ="books/details?id=' . $book_new[$i]['id_book'] . '"><h3 class="content"> ' . $book_new[$i]['name'] . '</h3></a>';
                    $result .= '<p>' .$book_new[$i]['price']. '</p>';
                    $result .= '<i onclick="cart(' . $book_new[$i]['id_book'] . ')" class="fas fa-cart-plus cart" data-toggle="modal" data-target="#myModal"></i></div>';
  
    }
               echo $result;
            }
?>
                </div>
            </div>     
            </div>    
        </div>
        
    
</div>
    <div class="footer">
        <div class="container">
            <div class="center_footer">
                <div class="col-xs-4 col-sm-4 item">
                    <h3>LIÊN HỆ</h3>
                    <ul class="col-xs-12 col-sm-12">
                        <li class="col-xs-12 col-sm-12">
                            <i class="fa fa-paper-plane"></i>
                            <p>
                                Address: 11 Nguyễn Đình Chiểu, 1 District, Hồ Chí Minh city
                            </p>
                        </li>
                        <li class="col-xs-12 col-sm-12">
                            <i class="fa fa-phone"></i>
                            <p> 0123 456 789
                                <br> Fax: (08) 123 456</p>
                        </li>
                        <li class="col-xs-12 col-sm-12">
                            <i class="fa fa-envelope"></i>
                            <p>tuyetlan2111@gmail.com
                                <br> Website: www.tuyetlan.com</p>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-4 col-sm-4 item">
                    <h3>HỖ TRỢ</h3>
                    <ul class="col-xs-12 col-sm-12">
                        <li class="col-xs-12 col-sm-12">
                            <a href="#">Điều khoản sử dụng</a>
                        </li>
                        <li class="col-xs-12 col-sm-12">
                            <a href="#">Chính sách đổi - trả - hoàn tiền</a>
                        </li>
                        <li class="col-xs-12 col-sm-12">
                            <a href="#">Phương thức thanh toán</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-4 col-sm-4 item">
                    <h3>ĐĂNG KÍ</h3>
                    <p>Nhập địa chỉ e-mail của bạn để nhận các cập nhật thường xuyên, cũng như tin tức về các sự kiện sắp tới
                        và các ưu đãi đặc biệt.</p>
                    <div class="form col-xs-12 col-sm-12">
                        <input class="col-xs-12 col-sm-9" type="text " name="email " placeholder="Email của bạn">
                        <button class="col-xs-12 col-sm-3" type="submit">Đăng kí</i>
                    </div>

                    </button>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Bạn vừa thêm 1 sản phẩm vào giỏ hàng</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="login" class="login">
            <form class="modal_content animate" action="#">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <div class="content_form">
                    <label for="uname">
                        <b>Email</b>
                    </label>
                    <input type="text" placeholder="Nhập Email" name="uname" required>

                    <label for="psw">
                        <b>Mật khẩu</b>
                    </label>
                    <input type="password" placeholder="Nhập password" name="psw" required>

                    <button type="submit">Đăng nhập</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Lưu mật khẩu
                    </label>
                    <span class="psw">Quên
                        <a href="#">mật khẩu</a>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div id="sign" class="sign">
            <form class="modal_content" action="/action_page.php">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('sign').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <div class="content_form">
                    <h3>Đăng kí tài khoản</h3>
                    <hr>
                    <label for="email">
                        <b>Email*</b>
                    </label>
                    <input type="text" name="email" required>

                    <label for="psw">
                        <b>Mật khẩu*</b>
                    </label>
                    <input type="password" name="psw" required>

                    <label for="psw-repeat">
                        <b>Xác nhận mật khẩu*</b>
                    </label>
                    <input type="password" name="psw-repeat" required>

                    <label for="name">
                        <b>Họ và tên*</b>
                    </label>
                    <input type="text" name="username" required>

                    <label for="gender">
                        <b class="label_login">Giới tính</b>
                    </label>
                    <input type="radio" name="gender" value="male"> Nam
                    <input type="radio" name="gender" value="female"> Nữ
                    <br>
                    <label for="date">
                        <b class="label_login">Ngày sinh</b>
                    </label>
                    <select id="days"></select>
                    <select id="months"></select>
                    <select id="years"></select>
                    <div class="clearfix">
                        <button type="submit" class="signupbtn">Tạo tài khoản</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="cdn/jquery-3.3.1/jquery.min.js"></script>
    <script src="cdn/fontawesome/js/fontawesome.js"></script>
    <link rel="stylesheet" href="cdn/fontawesome/css/fontawesome.css">
    <script src="cdn/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="cdn/jquery-ui-1.12.1/jquery-ui.js"></script>
    <script src="cdn/js/home.js"></script>
</body>
 </html>