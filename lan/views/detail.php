<?php require_once __DIR__ ."/header_main.php";?>

    <div class="container detail">
    
       <div class="col-xs-4 col-sm-4 col-md-4 image">
                    <img id="img_detail" src="<?php echo 'http://localhost:8012/lan/assets/img/' . $details_book[0]['img_front']; ?>"></div>
      
        <div class="col-xs-5 col-sm-5 col-md-5 content">
            <h3 id="title_detail"><?php echo $details_book[0]["name"];?></h3>
        <!-- <span>Tác giả <a id="author_detail" href="#"></a></span> -->
            
           
            
           
            
            
            <p>Giá:  <?php echo $details_book[0]["price"];?></p>
            <span class="author">Thể loại:
                <a id="cate_detail" href="#"></a>
            </span>
            <span class="author">Tác giả:           </span> 
            <a id="author_detail" href="#"></a>

            <div id="giftMessage">
                <div class="product-addon-item product-gift">
                    <img src="<?php echo BASE_URL;?>assets/img_icon/gift.png" class="icon" width="28" height="28" alt="Dịch vụ gói quà, tặng quà" title="">
                    <p>
                        <b>Bạn muốn gói quà và gửi thiệp?</b>
                        Hãy chọn hình thức gói quà ở bước thanh toán, Shop sẽ thực hiện gói quà và in thiệp với thông điệp riêng của bạn! -
                    </p>
                </div>
            </div>
            <div class="col-md-12 box">
                <div class="quantity col-md-6">
                    <p class="label">Số lượng:</p>
                    <p class="number-input">
                        <div>
                            <button class="btn-down" type="button">-</button>
                            <input id="qty" type="tel" name="qty" value="1" min="1" max="100" class="form-control">
                            <button class="btn-up" type="button">+</button>
                        </div>
                    </p>
                </div>
                <div class="col-md-6">
                        <button class="add" type="submit">Chọn mua
                                <i class="fas fa-cart-plus"></i>
                            </button>
                </div>
               
            </div>
        </div>
        <div class="contact_detail col-md-3">
            <div class="item">
                <i class="icon fas fa-phone-volume"></i>
                <p>
                    Liên hệ: 
                    <a href="tel:0988458350">0988458350</a>
                    <br>
                </p>
            </div>
            <div class="item">
                <i class="icon far fa-envelope"></i>
                <p>
                    Email:
                    <a href="tuyetlan2111@gmail.com">hotro@gmail.com</a>
                </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 tap_des">

            <h5>Mô tả</h5>

            <p id="content_detail">
            <?php echo $details_book[0]["content"];?>
            
            </p>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 related_product">
            <h2>Sản phẩm liên quan</h2>
            <div class="col-xs-12 col-sm-12 col-md-12 content" id="list-releted">

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
                            <p> tuyetlan2111@gmail.com
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
    <div class="clear"></div>
   
    <script src="cdn/jquery-3.3.1/jquery.min.js"></script>
    <script src="cdn/fontawesome/js/fontawesome.js"></script>
    <link rel="stylesheet" href="cdn/fontawesome/css/fontawesome.css">
    <script src="cdn/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="cdn/jquery-ui-1.12.1/jquery-ui.js"></script>
    <script src="cdn/js/home.js"></script>
</body>

</html>