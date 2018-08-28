<?php

class categoriesController extends BaseController {

    public function index() {

    }
    public function category(){
        if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $model_book =  $this->model->get('categoryModel'); 
        $rs_book = array();
        $rs_book=  $model_book->getBooksByCate($id);
        $this->view->data['book_by_cate'] = $rs_book;
     }
        $model =  $this->model->get('categoryModel');
        $rs_name_cate = array();
        $rs_name_cate=  $model->getCategories();
        $this->view->data['name_category']=$rs_name_cate;
        
     $this->view->show('book_cate');

    }
    public function excuteform(){
        $arr['name_author'] = isset($_GET['name_author']) ? $_GET['name_author'] : "";
        $arr['gmail'] = isset($_GET['gmail']) ? $_GET['gmail'] : "";
        $arr['facebook']= isset($_GET['author']) ? $_GET['facebook'] : "";
        
        if ($arr['name_author'] == " " ) {
            echo 'Chưa đủ thông tin';
        } else {
        echo $this->model->get('authorModel')->addauthor($arr);
        }

    }
    
}
?>