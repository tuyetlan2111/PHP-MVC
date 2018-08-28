<?php require_once __DIR__ ."/header.php";?>

    <section id="content_wrapper">
<header id="topbar" class="ph10">
    <div class="topbar-right hidden-xs hidden-sm mt5 mr35">
    </div>
</header>
<section id="content" class="table-layout animated fadeIn">
    <div class="chute chute-center">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title hidden-xs">Hóa đơn chi tiết
                        <b>  </b> 
                        </span>
                        
                    </div>
                    <div id="view_product" class="panel-body pn">
                        <div class="table-responsive">
                            <!-- <table class="table allcp-form theme-warning tc-checkbox-1 fs13"> -->
                            <form method="post" >
                     <table>
                     <tr class="bg-light">
                          <thead>
                                <th class="">STT</th>
                                <th class="" style="width: 330px;">Sách</th>
                                <th class="">Giá</th>
                                <th class="">Số lượng</th>
                                   
                    </tr>
                    </thead>
<?php
$result="'<tbody><tr>'";
if(isset($detail_import)){
    for($i = 0; $i< count($detail_import['books']);$i++){   
      
            $result .=  '<td> '.($i+1).'</td>';
            $result .=  '<td> '.($detail_import['books'][$i]['name']).'</td>';
            $result .= '<td class="">'.($detail_import['books'][$i]['price_import']).'</td>';
             $result .= '<td class="">'.($detail_import['books'][$i]['count']).'</td>';
            $result .= ' </tr></tbody>';   
   
    }
    echo $result;
}

?>
                                   </form>          
                </table> 
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