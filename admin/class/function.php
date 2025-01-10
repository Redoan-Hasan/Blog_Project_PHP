<?php
 Class BlogProject{
    private $connection;
    public function __construct(){
        $dbHost = "localhost";
        $dbUser = "root";  
        $dbPass = "";
        $dbName = "blogproject";
        $this->connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

        if(!$this->connection){
            die("Database not connected");
        }
    }
 }    

?>