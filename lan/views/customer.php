<?php 
    require_once __DIR__ ."/header.php";
?>

  <section id="content_wrapper">
<header id="topbar" class="ph10">
    <div class="topbar-right hidden-xs hidden-sm mt5 mr35">
        <a href="<?php echo BASE_URL;?>admin/add_book" class="btn btn-primary btn-sm ml10" title="Thêm sản phẩm">
            <span>Thêm khách hàng</span></a>
        
            <a href="sales-stats-products.html" class="btn btn-primary btn-sm ml10" title="Sửa sản phẩm">
            <span>Sửa khách hàng</span></a>
            
            <a href="sales-stats-products.html" class="btn btn-primary btn-sm ml10" title="Xóa sản phẩm">
            <span>Xóa khách hàng</span></a>
    </div>
</header>
<section id="content" class="table-layout animated fadeIn">
    <div class="chute chute-center">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title hidden-xs">Danh sách khách hàng                       
                       <b> <?php print_r(count($ds_customer));?> </b>                  
                        </span>
                    </div>
                    <div id="view_product" class="panel-body pn">
                        <div class="table-responsive">
                            <form method="post" >
                     <table>
                     <tr class="bg-light">
                          <thead>
                            <th class="text-center"></th>
                            <th class="">Mã khách hàng</th>
                            <th class="">Họ tên</th>
                            <th class="">Email</th>
                            <th class="">Phone</th>                                  
                            <th class="">Địa chỉ</th>
                    </tr>
                    </thead>
                                        
<?php
$result='<tbody><tr>';
if(isset($ds_customer)){
    for($i = 0; $i< count($ds_customer);$i++){
        $result .= '<td class="text-center check"><label class="option block mn">
        <input type="checkbox" name="inputname" value="FR"><span class="checkbox mn"></span></label></td>';
        $result .=  '<td> '.($ds_customer[$i]['user_id']).'</td>';
    $result .= '<td class="">'.($ds_customer[$i]['usertname']).'</td>';
    $result .= '<td class="">'.($ds_customer[$i]['email']).'</td>';
    $result .= '<td class="">'.($ds_customer[$i]['phone']).'</td>';
    $result .= '<td class="">'.($ds_customer[$i]['address']).'</td>';
    $result .= ' </tr></tbody>';
    }
    echo $result;
}

?>
                                   </form>          
                </table> 
        </div>
                    
                    </div>

  <nav aria-label="..." class="slide_book">
                        <ul class="pagination">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Trước</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                </nav>
                </div>
                
              
            </div>
        </div>          
    </div>
</section>
</section>
</div>




<?php 
    require_once __DIR__ ."/footer.php";
?>