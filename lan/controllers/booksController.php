<?php

class booksController extends BaseController {

    public function index() {
          
    }
        public function details() {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $model = $this->model->get('bookModel');
                $rs = array();
                $rs = $model->getBookById($id);
                $this->view->data['details_book'] = $rs; 
                $this->view->show('detail');
            }
        }     
      
        public function add_book(){ 

            $model2 =  $this->model->get('categoryModel');
            $rs_category = array();
            $rs_category=  $model2->getCategories();
            $this->view->data['view_category']=$rs_category;

            $model =  $this->model->get('authorModel');
            $rs_author = array();
            $rs_author=  $model->getauthor();
            $this->view->data['ds_author']=$rs_author;

            
            $this->view->show('add_product');           
        }


        public function excuteform(){
            
            $arr['name'] = isset($_GET['name']) ? $_GET['name'] : "";
            $arr['content'] = isset($_GET['content']) ? $_GET['content'] : "";
            $arr['author']= isset($_GET['author']) ? $_GET['author'] : "";
            $arr['category'] = isset($_GET['category']) ? $_GET['category'] : "";
            $arr['price'] = isset($_GET['price']) ? $_GET['price'] : "";
            
            if ($arr['name'] == "" || $arr['content'] == "" ||$arr['author'] == ""||$arr['category'] == ""||$arr['price'] == "" ) {
                echo 'Chưa đủ thông tin';
            } else {
            echo $this->model->get('bookModel')->addbook($arr);
            }

         

        }





        public function editbook(){
            $id = $args[1];

        }
        public function remove($args){
            $id = $args[1];
            $this->model->get('bookModel')->remove($id);
        echo "Remove";
        }
   
}
?>