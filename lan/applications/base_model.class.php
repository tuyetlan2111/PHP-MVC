<?php

class BaseModel {

    private static $instance;

    public function __construct() {
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new BaseModel();
        }
        return self::$instance;
    }

    public function get($name) {
        $file = __SITE_PATH__ . '/models/' . str_replace("model", "", strtolower($name)) . "Model.php";

        if (file_exists($file)) {
            include_once $file;
            $class = str_replace("model", "", strtolower($name)) . "Model";
            return new $class;
        }
        return NULL;
    }
}
?>