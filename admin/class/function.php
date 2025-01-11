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

    public function admin_login($data){
        $admin_email = $data["admin_email"];
        $admin_password = md5($data["admin_password"]);
        $query = "SELECT * FROM admininfo WHERE admin_email = '$admin_email' && admin_pass = '$admin_password'";

        if(mysqli_query($this->connection, $query)){
            $admin_info= mysqli_query($this->connection, $query);

            if($admin_info){
                header("location: dashboard.php");
                $admin_data = mysqli_fetch_assoc($admin_info);
                session_start();
                $_SESSION["adminId"] = $admin_data["id"] ;
                $_SESSION["adminName"] = $admin_data["admin_name"] ;
            }
            }
    }
    public function admin_logout(){
        unset($_SESSION["adminId"]);
        unset($_SESSION["adminName"]);
        header("location: index.php");
    }
 }    

?>