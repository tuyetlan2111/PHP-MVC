<?php

class error404Controller extends BaseController {

    public function index() {
        $this->view->data['heading'] = 'This is the 404';
        $this->view->show('error404');
    }
}

?>