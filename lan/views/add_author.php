<?php require_once __DIR__ ."/header.php";?>

    <section id="content_wrapper">      
<header>
    <div class="topbar-right hidden-xs hidden-sm mt5 mr35">
                <a href="<?php echo BASE_URL;?>books/add_book" class="btn btn-primary btn-sm ml10" title="Thêm sản phẩm">
                   <span>Thêm sản phẩm</span></a>
                <a href="<?php echo BASE_URL;?>author" class="btn btn-primary btn-sm ml10" title="Thêm sản phẩm"><span>Thêm tác giả</span></a>
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
                                            <form action="<?php echo BASE_URL;?>author/excuteform" method = "POST" enctype="multipart/form-data">
                                                <table style="width:100%">
                                                <tr>
                                                        <td>Tên tác giả :</td>
                                                        <td><input type="text" name="name_author" id="name_author" class="event-name gui-input br-light light"
                                                         value=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gmail : </td>
                                                        <td><textarea rows="4" cols="50" name="gmail" id="gmail"></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Facebook :</td>
                                                        <td><input type="text" name="facebook" id="facebook" class="event-name gui-input br-light light"> </td>
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
<script>
function add() {
var name_author = $("#name_author").val();
var gmail = $("#gmail").val();
var facebook = $("#facebook").val();
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       if (this.responseText == 'empty') {
           alert('Ghi day du');
       } else 
    if (this.responseText == 'error') {
           alert('error');
       } else
        {
           alert("thanh cong");
           window.location.reload();
       }
    }
  };
  xhttp.open("GET", "<?php echo BASE_URL; ?>author/excuteform?name_author="+name_author+"&gmail="+gmail+"&facebook="+facebook, false);
  xhttp.send();
}


</script>
<?php require_once __DIR__ ."/footer.php";?>