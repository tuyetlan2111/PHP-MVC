<?php require_once __DIR__ ."/header_main.php";?>
<div class="container body">
        <div class="col-md-2 left_body">
       
            <div id="book-list" class="content">
                 <div id="category-list" class="col-xs-12 col-sm-12 col-md-12 content">
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
                        <img src="<?php echo BASE_URL;?>assets/img_icon/phone.png"> 0988.458.350
                    </a>

                    <p>
                        <a href="www.gmail.com">
                            <img src="<?php echo BASE_URL;?>assets/img_icon/mail.png"> tuyetlan2111@gmail.com
                        </a>
                    </p>
                    <p>
                        <a href="www.facebook.com">
                            <img src="<?php echo BASE_URL;?>assets/img_icon/facebook.png"> Tuyết Lan </a>
                    </p>
            </div>
          
     
    
</div>
</div>
        <div class="col-md-10 right_body">
        <div class="col-md-12 nd list_book_cate">
        <div id="book-list" class="content">
                <?php
            $result=" ";
            
            if (isset($book_by_cate)){
                // $max = count($book_by_cate) > 4 ? 4 : count($book_by_cate);
           
              for($i = 0; $i < count($book_by_cate); $i++){
               // echo '<h1 class="title_cate">'. $name_category[0]['name_cate'].'</h1>';
                $result .= '<div id="book_item_' . $book_by_cate[$i]['id_book'] . '" class= "col-md-3 item">';
               $result .= '<a href ="books/detail/(' .$book_by_cate[$i]['id_book'] . ')"><img src="http://localhost:8012/lan/assets/img/' . $book_by_cate[$i]['img_front']. '"></a>';
                $result .= '<a href ="books/detail/' . $book_by_cate[$i]['id_book'] . '"><h3 class="content"> ' . $book_by_cate[$i]['name'] . '</h3></a>';
                 $result .= '<p>' .$book_by_cate[$i]['price']. '</p>';
               $result .= '<i onclick="books/giohang(' . $book_by_cate[$i]['id_book'] . ')" class="fas fa-cart-plus cart" data-toggle="modal" data-target="#myModal"></i></div>';
              }
            
           
             
      
  
    
                echo $result;
           }
            ?>
            </dv>
</div>
</div>

 <script src="<?php echo BASE_URL;?>cdn/jquery-3.3.1/jquery.min.js"></script>
    <script src="<?php echo BASE_URL;?>cdn/fontawesome/js/fontawesome.js"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL;?>cdn/fontawesome/css/fontawesome.css">
    <script src="<?php echo BASE_URL;?>cdn/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL;?>cdn/jquery-ui-1.12.1/jquery-ui.js"></script>
    <script src="<?php echo BASE_URL;?>cdn/js/home.js"></script>
</body>
 </html>