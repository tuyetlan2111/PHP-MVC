<?php

class bookModel extends BaseModel {
    
 public function getBookss(){
        global $db;
        $rs= $db->query("SELECT * FROM books ORDER BY id_category ASC");
        return $rs;
    
    }
    
    public function getAllBooks($amount) {
        global $db;
        $rs = $db->select('books', "1 ORDER BY RAND() LIMIT $amount");
        return $rs;
    }
public function getBookByDate($date){
    global $db;
    $rs = $db->select('books', "");
    return $rs;
}
    public function getBookById($id) {       
        global $db;
        $rs = $db->select('books', "`id_book` = '$id'");
        return $rs;
    }

    public function getBooksById($args) {
        global $db;
        $where = "";
        for ($i=0; $i<count($args); $i++) {
            $where.= "`id` = '".$args[$i]."'";
            if ($i!= count($args)-1) {
                $where.=" OR ";
            }
        }
        $rs = $db->select('books', $where);
        return $rs;
    }

    public function shownewbook(){
        global $db;
        $sql = $db->query("SELECT * FROM books WHERE date_created >= '2018:07:28'");
        return $sql;
    }

    public function edit($id, $data){
        global $db;
        $rs = $db->update($data,'books',"`id_book` = '$id'");
        return $rs;
    }

    public function remove($id, $data){
        global $db;
        $rs = $db->delete($data,'books',"`id_book` = '$id'");
        return $rs;
    }

    public function getbookByPrice(){
        global $db;
        $min_price=$_GET['min_price'];
        $max_price=$_GET['max_price'];
        $rs= $db->query("SELECT * FROM books WHERE price BETWEEN '$min_price' AND '$max_price' ");
        return $rs;
    }
  public function addbook($arr){
      global $db;
      $sql = "INSERT INTO `books` VALUES (NULL, '".$arr['name']."', '".$arr['category']."', '".$arr['content']."', '".$arr['price']."', CURRENT_TIMESTAMP, '', '')";
      $rs = $db->insert2($sql);
      if ($rs != -1) {
        $sql = "INSERT INTO `compose` VALUES ('".$rs."', '".$arr['author']."')";
        $result = $db->query($sql);
        return "success";
      }
      return "error";
      
  }

  
   
}
?>