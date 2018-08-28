<?php require_once __DIR__ ."/header.php";?>

    <section id="content_wrapper">      
<header>
    <div class="topbar-right hidden-xs hidden-sm mt5 mr35">
  
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
                                            <form action="" method = "POST" enctype="multipart/form-data">
                                                <table style="width:100%">
                                              
                                                <tr>
                                                
                                                <td>Sách :
                                                                                                     
                                                    <select id="book" multiple="multiple">
                                                    
                                                    <?php 
                                                    for($i=0;$i<=count($select_book);$i++){
                                                        echo ' <option value="'.$select_book[$i]['id_book'].'">'.$select_book[$i]['name'].'</option>';
                                                    }
                                                   
                                                    ?>
                                                    </select>
                                                </td>
                                                    <td><button><a href="http://localhost:8012/lan/books/add_book">Thêm sách mới</a></button>
                                                </tr>
                                                <table>
                                                <tr>
                                                        <th>Tên sách</th>
                                                        <th>Giá</th> 
                                                        <th>Số lượng</th>
                                                </tr>
                                                    <tr>
                                                    <td><input type="text" name="name_book" id="name" class="event-name gui-input br-light light"> </td>
                                                        <td><input type="text" name="price" id="price" class="event-name gui-input br-light light"> </td>
                                                        <td><input type="text" name="count" id="count" class="event-name gui-input br-light light"> </td>
                                                    </tr>
                                                    
                                                </table>
                                                </table>
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
$("#book").select2();
function addimport(){
    var name_book = $("#book").val();
    
}

</script>