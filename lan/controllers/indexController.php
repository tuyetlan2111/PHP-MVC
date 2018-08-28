<?php

class indexController extends BaseController {

    public function index() {   
        
        $model =  $this->model->get('categoryModel');
        $rs_name_cate = array();
        $rs_name_cate=  $model->getCategories();
        $this->view->data['ds_category_home']=$rs_name_cate;

        $model_book =  $this->model->get('bookModel'); 
        $rs_book = array();
        $rs_book=  $model_book->getBookss();
        $this->view->data['ds_book']=$rs_book;

        $new_book =  $this->model->get('bookModel'); 
        $rs_new = array();
        $rs_new=  $new_book-> shownewbook();
        $this->view->data['book_new']=$rs_new;


       
        $this->view->show('index1');  
    }

    public function cart(){
       
            $model =  $this->model->get('bookModel');
            $rs_name_cate = array();
            $rs_name_cate=  $model->getbookss();
            $this->view->data['cart']=$rs_name_cate;
            $this->view->show('giohang');  
       
    }


}

?>