<?php

class Router {

    private $path;
    private $args = array();
    public $file;
    public $controller;
    public $action;

    public function __construct() {
        // ...
    }

    public function setPath($path) {

        if (is_dir($path) == false) {
            throw new Exception('Invalid controller path: ' . $path);
        }
        $this->path = $path;
    }

    private function getController() {

        $route = (empty($_GET['rt'])) ? '' : $_GET['rt'];

        if (empty($route)) {
            $route = 'index';
        } else {
            $parts = explode('/', $route);

            $this->controller = $parts[0];
            if (isset($parts[1])) {
                $this->action = $parts[1];

                if (isset($parts[2])) {
                    $count_args = count($parts);
                    $args = array();
                    for ($i = 2; $i < $count_args; $i++) {
                        $args[count($args)] = $parts[$i];
                    }
                    $this->args = $args;
                }
            } else {
                $this->action = '';
            }
        }

        if (empty($this->controller)) {
            $this->controller = 'index';
        }

        if (empty($this->action)) {
            $this->action = 'index';
        }

        $this->file = $this->path . '/' . $this->controller . 'Controller.php';
    }

    public function loading($path) {

        $this->setPath($path);

        $this->getController();

        if (is_readable($this->file) == false) {
            $this->file = $this->path . '/error404.php';
            $this->controller = 'error404';
        }

        include_once $this->file;

        $cClassName = $this->controller . 'Controller';

        $controller = new $cClassName();

        if (is_callable(array($controller, $this->action)) == false) {
            $action = 'index';
        } else {
            $action = $this->action;
        }

        if (!empty($this->args)) {
            $controller->$action($this->args);
        } else {
            $controller->$action();
        }
    }
}
?>