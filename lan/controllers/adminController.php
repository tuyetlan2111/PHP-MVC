<?php
class adminController extends BaseController {

public function index() {   
    $this->view->show('index_ad');  
}
public function view_book(){
    $model =  $this->model->get('bookModel');
    $model2 =  $this->model->get('categoryModel');
    $rs_category = array();
    $rs_category=  $model2->getCategories();
    $this->view->data['view_category']=$rs_category;

    $rs_book = array();
    $rs_book=  $model->getBookss();
    $this->view->data['view_product']=$rs_book;
    $this->view->show('view_product');  
    }
  
// public function add_book(){
   
//     $model2 =  $this->model->get('categoryModel');
//     $rs_category = array();
//     $rs_category=  $model2->getCategories();
//     $this->view->data['view_category']=$rs_category;

//     $model =  $this->model->get('authorModel');
//     $rs_author = array();
//     $rs_author=  $model->getauthor();
//     $this->view->data['ds_author'] = $rs_author;
    
//     $this->view->show('add_product');  
//     }
      
    
}
?>