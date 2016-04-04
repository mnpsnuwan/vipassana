<?php
class MySQLDatabase {
    public $connection;

    function __construct() {
        $this->open_connection();
    }

    public function open_connection() {
        $this->connection = mysqli_connect("localhost", "root", "", "vipassana");
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
            //echo "Failed to connect yto MySQL: " . mysqli_connect_error();
        }}
        
    public function close_connection() {
        if (isset($this->connection)) {
            mysqli_close($this->connection);
            unset($this->connection);
        }}

    public function query($myquery) {
        //echo $myquery;
      //  $result = mysqli_query($this->connection, $myquery);
        if ( !(mysqli_query($this->connection, $myquery)) ) {
            die("Database query failed: "/* .mysqli_error("query") */);
            
        }
        return $result;
    }

    public function escape_string($value) {
        $value = mysqli_real_escape_string($this->connection, $value);
        return $value;
    }

    public function fetch_assoc($result) {
        return mysqli_fetch_assoc($result);
    }

}

?>