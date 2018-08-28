<?php

class importController extends BaseController {

    public function index() {
                 
    }
    public function show() {
           
        $model = $this->model->get('importModel');
        $rs = array();
        $rs = $model->getImport();
        $this->view->data['show'] = $rs; 
        $this->view->show('import');
}
    public function details() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $model = $this->model->get('importModel');
            $rs = array();
            $rs = $model->getById($id);
            $this->view->data['detail_import'] = $rs; 
            $this->view->show('detail_import');
        }
    }    
    public function add() {
           
        $model = $this->model->get('importModel');
        $rs = array();
        $rs = $model->getImport();
        $this->view->data['show'] = $rs; 

        $model = $this->model->get('bookModel');
        $rs_book = array();
        $rs_book = $model->getBookss();
        $this->view->data['select_book'] = $rs_book; 
        if(isset($_POST)){
    print_r($_POST);
}
else{
    echo "Ban chưa chọn";
}

        $this->view->show('add_import');
    } 
}     
