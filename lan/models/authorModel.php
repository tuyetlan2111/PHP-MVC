<?php

class authorModel extends BaseModel {
    public function getauthor() {
        global $db;
        $rs = $db->select('author', "1");
        return $rs;
    }  
    public function addauthor($arr){
        global $db;
        $sql = "INSERT INTO `author` VALUES (NULL, '".$arr['name_author']."','', '".$arr['gmail']."', '".$arr['facebook']."')";
       
    }
    public function editauthor($id){
        global $db;

    }
}
?>
