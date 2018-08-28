<?php require_once __DIR__ ."/header.php";?>

    <section id="content_wrapper">
<header id="topbar" class="ph10">
    <div class="topbar-right hidden-xs hidden-sm mt5 mr35">
        <a href="<?php echo BASE_URL;?>import/add" class="btn btn-primary btn-sm ml10" title="Thêm sản phẩm">
            <span>Thêm phiếu nhập kho</span></a> 
    </div>
</header>
<section id="content" class="table-layout animated fadeIn">
    <div class="chute chute-center">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title hidden-xs">Danh sách các hóa đơn nhập kho
                        <b> <?php print_r(count(($show)));?> </b> 
                                                
                        </span>                        
                    </div>
                    <div id="view_product" class="panel-body pn">
                        <div class="table-responsive">  
                            <form method="post" >
                     <table>
                     <tr class="bg-light">
                        <thead>
                            <th class="">Mã hóa đơn</th>
                            <th class="" style="width: 124px;">Mã nhân viên</th>
                            <th class="">Ngày</th>
                            <th class="">Công ty cung cấp</th>   
                        </thead>                               
                    </tr>                                                          
<?php
$result='<tbody><tr>';
if(isset($show)){
    for($i = 0; $i< count($show);$i++){
    $result .=  '<td> '.($show[$i]['id_import']).'</td>';
    $result .= '<td class="">'.($show[$i]['id_employ']).'</td>';
    $result .= '<td class="">'.($show[$i]['date']).'</td>';
    $result .= '<td class="">'.($show[$i]['publishing company']).'</td>';
    $result .= '<td class=""><button type="button">Xóa</button></td>';
    $result .= '<td class=""><button type="button">Sửa</button></td>';
    $result .= '<td class=""><a href="http://localhost:8012/lan/import/details?id='.($show[$i]['id_import']).'" >Chi tiết</a</td>';
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

<?php require_once __DIR__ ."/footer.php";?>