<?php

class BaseView {

    private static $instance;
    public $data = array();

    public function __construct() {

    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new BaseView();
        }
        return self::$instance;
    }

    public function __set($index, $value) {
        $this->vars[$index] = $value;
    }

    public function show($name) {
        $path = __SITE_PATH__ . '/views' . '/' . $name . '.php';

        if (file_exists($path) == false) {
            throw new Exception('Template not found in ' . $path);
            return false;
        }

        foreach ($this->data as $key => $value) {
            $$key = $value;
        }

        include_once $path;
    }
}
?>