<?php

include("library/class/book.class.php");

if(isset($_GET["book"])){
    $book = new Book($conn);
    if($book->checknovelinbook($_GET["book"])==1){
        header("location: ?module=novel&novel=".$book->getanovel($_GET["book"]));
    }
    else{
        $book_data = $book->getbook($_GET["book"]);
        $novel = $book->getnovel($_GET["book"], "ORDER BY novel_id DESC");
        $tag = $book->gettag($_GET["book"]);
    }
}
else{
    header("location: 404.html");
}
//Include template
include("tpl/".$tpl."/book.tpl.php");