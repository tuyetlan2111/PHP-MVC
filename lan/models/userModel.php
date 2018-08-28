<?php

class userModel extends BaseModel{
    
	public function login($email,$pass){
		$qr = mysql_query("SELECT * FROM `user` WHERE `email` = '.$email.' AND `password` = '".$password."'") or die("Lỗi truy vấn");
		$rs = mysql_num_rows($qr);
		if($rs == 1){
			return 1;
		}
		else{
			return 0;
		}
	}
	
public function addUser(){
	
}
    public function getUser(){
        global $db;
        $rs = $db->select('user', "`type` = '1'");
        return $rs;
    }
    public function getEmploy(){
        global $db;
        $rs = $db->select('user', "`type` = '2'");
        return $rs;
    }
    
}
?>