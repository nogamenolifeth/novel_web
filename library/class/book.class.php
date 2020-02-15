<?php

class Book{
    public $conn;

    function __construct($connection){
        $this->conn = $connection;
    }

    function checknovelinbook($book){
        $count = mysqli_fetch_array(mysqli_query($this->conn, "SELECT count(novel_id) FROM novel WHERE novel_book_id='".(int) $book."' "));
        return $count["count(novel_id)"];
    }
    function getanovel($book){
        $novel_id = mysqli_fetch_array(mysqli_query($this->conn, "SELECT novel_id FROM novel WHERE novel_book_id='".(int) $book."' LIMIT 1 "));
        return $novel_id["novel_id"];
    }
}