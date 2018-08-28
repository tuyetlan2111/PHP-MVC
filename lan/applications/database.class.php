<?php

class Database {
    private $connection;
    private $result = null;
    private $magic_quotes_active;
    private $real_escape_string_exists;
    private static $instance;

    public function __construct() {
        $this->magic_quotes_active = get_magic_quotes_gpc();
        $this->real_escape_string_exists = function_exists("mysql_real_escape_string");
    }

    public static function getInstance() {
        if (!self::$instance) {
            $db_con = new Database();
            $db_con->connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            self::$instance = $db_con;
        }
        return self::$instance;
    }

    private function connect($address, $account, $pwd, $name) {
        $this->connection = mysqli_connect($address, $account, $pwd);
        if (!$this->connection) {
            die("Database connection failed: " . mysql_error());
        } else {
            $db_select = mysqli_select_db($this->connection, $name);
            if (!$db_select) {
                die("Database selection failed: " . mysql_error());
            }
        }
        mysqli_query($this->connection, "SET NAMES 'utf8'");
    }

    public function closeConnect() {
        if ($this->connection) {
            mysql_close($this->connection);
            unset($this->connection);
        }
    }

    public function query($sql) {
        $result = mysqli_query($this->connection, $sql);
        return $this->processRowSet($result);
    }

    private function fetch_array($first_row = FALSE) {
        if ($this->result) {
            if (!$first_row) {
                $rows = array();
                while ($row = mysql_fetch_array($this->result)) {
                    $rows[] = $row;
                }
            } else {
                $rows = mysql_fetch_array($this->result);
            }
        }
        return $rows;
    }

    private function num_row() {
        if ($this->result) {
            $num = null;
            $num = mysql_num_rows($this->result);
        }
        return $num;
    }

    private function fetch_object($first_row = FALSE) {
        if ($this->result) {
            if (!$first_row) {
                $rows = array();
                while ($row = mysqli_fetch_object($this->result)) {
                    $rows[] = $row;
                }
            } else {
                $rows = mysqli_fetch_object($this->result);
            }
        }
        return $rows;
    }

    private function processRowSet($rowSet, $singleRow = false) {
        $resultArray = array();
        while ($row = mysqli_fetch_assoc($rowSet)) {
            array_push($resultArray, $row);
        }

        if ($singleRow === true) {
            return $resultArray[0];
        }

        return $resultArray;
    }
//lấy 1
    public function select($table, $where) {
        $sql = "SELECT * FROM $table WHERE $where";

        $result = mysqli_query($this->connection, $sql);
    //    if(mysqli_num_rows($result) == 1){
    //        return $this->processRowSet($result,true);
    //    }
       return $this->processRowSet($result);
    }
    //chọn tất cả từ database
    public function selectall($table, $where){
        $sql = "SELECT * FROM $table WHERE $where";
        $this->result=mysqli_query($this->connection,$sql);
        return $this->result;
    }
//Xóa một row từ cơ sở dữ liệu
    public function delete($table,$where){
        $sql="DELETE FROM $table WHERE $where";
        mysql_query($this->connection,$sql) or die(mysql_error());
    }

public function insert2($sql) {
    if (mysqli_query($this->connection, $sql)) {
        $last_id = mysqli_insert_id($this->connection);
        return $last_id;
    }
    return -1;
}

    public function insert($data,$table){
    $columns = "";
    $values ="";
    foreach($data as $columns => $values){
    $columns .=($columns == "")?"" : ",";
    $columns .= $columns;
    $values .=($values == "")?"" : ",";
    $values .= $values;
        }
    $sql ="INSERT INTO $table($columns) values ($values)";
    mysqli_query($this->connection,$sql) or die(mysql_error());
    //return kết qua là ID
    return mysql_insert_id();
    }

    public function update($data,$table,$where){
        foreach($data as $columns => $values){
            $sql = "UPDATE $table SET $columns = $values WHERE $where";
            mysql_query($this->connection,$sql) or die(mysql_error());
        }
        return true;
    }
    
}
?>