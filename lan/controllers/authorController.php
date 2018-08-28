<?php

class authorController extends BaseController {

    public function index() {

        $this->view->show('add_author');
    }
    public function excuteform(){
            
        $arr['name_author'] = isset($_GET['name_author']) ? $_GET['name_author'] : "";
        $arr['gmail'] = isset($_GET['gmail']) ? $_GET['gmail'] : "";
        $arr['facebook']= isset($_GET['facebook']) ? $_GET['facebook'] : "";
        
        // if ($arr['name_author'] == "" || $arr['gmail'] == "" ||$arr['facebook'] == "" ) {
        // echo 'empty';
        // } else {
        echo $this->model->get('authorModel')->addauthor($arr);
        // }
            
    }
}