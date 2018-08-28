<link rel="stylesheet"  href="<?php echo BASE_URL;?>cdn/dataTable/dataTable.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
<?php require_once __DIR__ ."/header.php";?>

    <section id="content_wrapper">
<header id="topbar" class="ph10">
    <div class="topbar-right hidden-xs hidden-sm mt5 mr35">
        <a href="http://localhost:8012/lan/books/add_book" class="btn btn-primary btn-sm ml10" title="Thêm sản phẩm">
            <span>Thêm sản phẩm</span></a> 
    </div>
</header>
<section id="content" class="table-layout animated fadeIn">
    <div class="chute chute-center">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title hidden-xs">Danh sách các sản phẩm
                        <b> <?php print_r(count($view_product));?> </b> 
                                                
                        </span>
                        
                    </div>
                    <div id="view_product" class="panel-body pn">
                        <div class="table-responsive">
                       
                        <!-- <table class="table allcp-form theme-warning tc-checkbox-1 fs13"> -->
                            <form method="post" >
                            <table id="myTable">
                     
                     <tr class="bg-light">
                          <thead>
                                    <!-- <th class="text-center"></th> -->
                                    <th class="">Thể loại</th>
                                    <th class="">Mã sản phẩm</th>
                                    <th class="">Hình</th>
                                    <th class="">Tên sản phẩm</th>                                  
                                    <th class="">Giá</th>
                                    <th class="">Số lượng tồn kho</th>
                                    </thead>
                    </tr>
                   
                                        
<?php
$result='<tbody><tr>';
if(isset($view_product)){
    for($i = 0; $i< count($view_product);$i++){
        // $result .= '<td class="text-center check"><label class="option block mn">
        // <input type="checkbox" name="inputname" value="FR"><span class="checkbox mn"></span></label></td>';

    $result .=  '<td> '.($view_product[$i]['id_category']).'</td>';
    $result .= '<td class="">'.($view_product[$i]['id_book']).'</td>';
    $result .= '<td class="w100"><img class="img-responsive mw40 ib mr10" title="user" alt=""
         src="http://localhost:8012/lan/assets/img/' . $view_product[$i]['img_front']. '"></td>';
    $result .= '<td class="">'.($view_product[$i]['name']).'</td>';
    $result .= '<td class="">'.($view_product[$i]['price']).'</td>';
    $result .= '<td class="">'.($view_product[$i]['price']).'</td>';
    $result .= '<td class=""><button type="button">Xóa</button></td>';
    $result .= '<td class=""><button type="button">Sửa</button></td>';
    $result .= ' </tr></tbody>';
    }
    echo $result;
}

?></table> 
                                   </form>          
                
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
<script src="<?php echo BASE_URL;?>cdn/dataTable/dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

<script>
$(document).ready(function () {
    $('#myTable').DataTable();
} );
</script>
