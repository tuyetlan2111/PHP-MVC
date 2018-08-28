<?php

class usersController extends BaseController {

    public function index() {  
        $login = $this->model->get('userModel');
        $rs = array();
      
        if(isset($_POST['login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $rs = $login ->login( $email, $password)
             if($login == 1){
                 echo "Dang nhập thành công";
                 $this->view->data['index1'];
             }
             else{
                 echo "Sai mật khẩu";
             }
        }
            
    }
   
    public function show_customer(){

        $user = $this->model->get('userModel');
        $rs = array();
        $rs= $user->getUser();
        $this->view->data['ds_customer'] = $rs;
        $this->view->show('customer');
    }

    public function show_employee(){
        $user = $this->model->get('userModel');
        $rs = array();
        $rs= $user-> getEmploy();
         $this->view->data['ds_employee'] = $rs;
        $this->view->show('Employee');
       
    }

    
} 
  
?>