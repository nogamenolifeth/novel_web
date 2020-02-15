<?php

include("library/class/book.class.php");

if(isset($_GET["book"])){
    $book = new Book($conn);
    if($book->checknovelinbook($_GET["book"])==1){
        header("location: ?module=novel&novel=".$book->getanovel($_GET["book"]));
    }
    else{
        
    }
}
else{
    
}
//Include template
include("tpl/".$tpl."/book.tpl.php");