<?php

class categoryModel extends BaseModel {
    public function getCategories() {
        global $db;
        $rs = $db->select('categories', '1');
        return $rs;
    }

    public function getCategory($id) {
        global $db;
        $rs = $db->select('categories', "`id` = '" . $id . "'");
        return $rs;
    }
    public function getBooksByCate($id_loai) {
        global $db;
       //$rs = $db->select("books","`id_category` = '".$id_loai."'");
        $rs = $db->query("SELECT * FROM `books` WHERE `id_category` = $id_loai");
        return $rs;
    }
}
?>