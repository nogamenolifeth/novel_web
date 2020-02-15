<?php

class Main {
    public $conn;

    function __construct($connection){
        $this->conn = $connection;
    }
    function getconfig($variable){
        $variable = mysqli_real_escape_string($this->conn, $variable);
        $config_value = mysqli_fetch_array(mysqli_query($this->conn,"SELECT * FROM config WHERE config_var = '".$variable."' "));
        return $config_value["config_value"];
    }
    function getnavbar(){
        $navbar_item = mysqli_query($this->conn,"SELECT * FROM navbar ORDER BY nav_order");
        return $navbar_item;
    }
    function islogin(){
        if($_COOKIE["login"]){
            return 1;
        }
        else{
            return 0;
        }
    }
    function getlogin(){
        $member_encrypt = mysqli_real_escape_string($this->conn,$_COOKIE["login"]);
        $login_data = mysqli_query($this->conn,"SELECT * FROM member WHERE member_encrypt = '".$member_encrypt."' ");
        return $login_data;
    }
}