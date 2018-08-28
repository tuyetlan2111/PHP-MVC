<?php 
    require_once __DIR__ ."/header.php";
?>
    <section id="content_wrapper">      
<header>
    <div class="topbar-right hidden-xs hidden-sm mt5 mr35">
                <a href="<?php echo BASE_URL;?>books/add_book" class="btn btn-primary btn-sm ml10" title="Thêm sản phẩm">
                   <span>Thêm sản phẩm</span></a>
                <a href="<?php echo BASE_URL;?>author/" class="btn btn-primary btn-sm ml10" title="Thêm sản phẩm"><span>Thêm tác giả</span></a>
                <a href="add_product" class="btn btn-primary btn-sm ml10" title="Thêm sản phẩm"><span>Thêm thể loại</span></a>
    </div>
    </header>
        <section id="content" class="table-layout animated fadeIn">
            <div class="chute chute-center pt30">
                <div class="panel mb25 mt5">
                    <div class="panel-body pn">
                        <div class="tab-content pn br-n allcp-form theme-primary">
                            <div id="tab1_1" class="tab-pane active">
                                <div class="section row mbn">                                   
                                    <div class="col-md-12 ph10 add_product">
                                        <div class="section mb10">
                                            <form action="<?php echo BASE_URL;?>books/excuteform" method = "POST" enctype="multipart/form-data">
                                                <table style="width:100%">
                                                    <tr>
                                                        <td>Tên sách :</td>
                                                        <td><input type="text" name="name" id="name_book" class="event-name gui-input br-light light"
                                                         value=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nội dung sách</td>
                                                        <td><textarea rows="4" cols="50" name="content" id="content_book" form="usrform"></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chọn tác giả:</td>

                                                        <td><select id="author_book"> 
                                                        <?php
                                                           
                                                           for($i=0; $i< count($ds_author);$i++){
                                                               echo '<option value="'.$ds_author[$i]['id_author'].'">'.$ds_author[$i]['name_author'] .'</option> ';
                                                           }
                                                        ?>    
                                                            </select>  
                                                        </td>
                                                    </tr>
                                                     
                                                    <tr>
                                                        <td>Chọn thể loại:</td>
                                                        <td><select id="category_book">
                                                        <?php
                                                           
                                                              for($i=0; $i< count($view_category);$i++){
                                                                  echo '<option value="'.$view_category[$i]['id'].'"  name="add_author">'.$view_category[$i]['name_cate'] .'</option> ';
                                                              }
                                                        ?>                                                         
                                                            </select>  
                                                        </td>
                                                    </tr>   
                                                    <tr>
                                                        <td>Giá sách :</td>
                                                        <td><input type="text" id="price_book" name="price" class="event-name gui-input br-light light"> </td>
                                                    </tr>
                                                   
                                                </table>
                                                <div class="ph10 add_img_product">
                                        <div class="fileupload fileupload-new allcp-form" data-provides="fileupload">
                                            <div class="fileupload-preview thumbnail mb20">
                                            <input type="file" name="myimage">
                                            <input name="submit_image" value="Upload">
                                            </div>
                                        </div>
                                    </div>
                                                <button onclick="add()">Lưu</button>
                                            </form>                                                                                                                     
                                        </div>                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</div>
<?php require_once __DIR__ ."/footer.php";?>
<script>
    //  $("#author_book").select2();
function add() {
   
var name = $("#name_book").val();
var content = $("#content_book").val();
var author = $("#author_book").val();
var category = $("#category_book").val();
var price = $("#price_book").val();
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       if (this.responseText == 'Chưa đủ thông tin') {
           alert('Ghi day du');
       } else if (this.responseText == 'error') {
           alert('error');
       } else{
           alert("thanh cong");
           window.location.reload();
       }
    }
  };
  xhttp.open("GET", "<?php echo BASE_URL; ?>books/excuteform?name="+name+"&content="+content+"&author="+author+"&category="+category+"&price="+price, false);
  xhttp.send();
}


</script>
