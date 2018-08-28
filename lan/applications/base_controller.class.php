<?php

abstract class BaseController {

    abstract function index();

    public function __construct() {
        $this->model = BaseModel::getInstance();
        $this->view = BaseView::getInstance();
    }

    public function render($controller, $name) {
        $path = __SITE_PATH__ . '/controllers' . '/' . $controller . 'Controller.php';

        if (file_exists($path) == false) {
            throw new Exception('Template not found in ' . $path);
            return false;
        }

        include_once $path;
        $class = $controller . 'Controller';
        $function = new $class();
        $action = explode('/', $name);
        if (count($action) > 1) {
            for ($i = 1; $i < count($action); $i++) {
                $arr[$i] = $action[$i];
            }
            $function->$action[0]($arr);
        } else {
            $function->$action[0]();
        }
    }

    public function redirect($controller, $name) {
        echo "<script>window.location='" . BASE_URL . $controller . "/" . $name . "';</script>";
    }
}
?>