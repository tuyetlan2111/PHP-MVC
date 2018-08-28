<?php

class importModel extends BaseModel {
    
    public function getImport(){
        global $db;
        $rs= $db->query("SELECT * FROM importid ORDER BY id_import ASC");
        return $rs;   
    }
    public function getById($id) {       
        global $db;
        $rs = $db->select('imported_detail', "`id_import` = '$id'");
        
      if(count($rs) > 0){
          
          $obj['id_import'] = $rs[0]['id_import'];
              
              
              $obj['books']=array();
          for($i = 0; $i < count($rs); $i++){
              $tmp = $db->select('books',"`id_book` = '".$rs[$i]['id_book']."'");
              if (count($tmp) > 0) {
                //$elm_book= $tmp[0];
                $elm_book['id_book'] = $tmp[0]['id_book'];
                $elm_book['name'] = $tmp[0]['name'];
                $elm_book['price_import'] = $rs[$i]['price_import'];
                $elm_book['count'] = $rs[$i]['count'];
                array_push($obj['books'],$elm_book);
              }
              
          }
          return $obj;
      }
        return array();
    }
    public function add(){
        global $db;
        $rs= $db->query("SELECT * FROM importid ORDER BY id_import ASC");
          
    }
}
?>
