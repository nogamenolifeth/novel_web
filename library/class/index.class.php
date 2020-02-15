<?php

class Index {
    public $conn;

    function __construct($conn){
        $this->conn = $conn;
    }
    function getbanner(){
        $banner_item = mysqli_query($this->conn,"SELECT * FROM banner ORDER BY banner_id DESC");
        return $banner_item;
    }
}