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
    function getnovel($book, $sqlorder){
        $novel = mysqli_query($this->conn, "SELECT * FROM novel WHERE novel_book_id='".(int) $book."' ".$sqlorder);
        return $novel;
    }
    function getbook($book){
        $book = mysqli_fetch_array(mysqli_query($this->conn, "SELECT * FROM book WHERE book_id='".(int) $book."' LIMIT 1 "));
        return $book;
    }
    function gettag($book){
        $tag = mysqli_query($this->conn, "SELECT * FROM book_tag INNER JOIN tag_catagory ON tag_catagory.tag_id = book_tag.book_tag_id WHERE book_tag.book_book_id='".(int) $book."' ");
        return $tag;
    }
}