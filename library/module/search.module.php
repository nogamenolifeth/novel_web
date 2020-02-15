<?php

if(isset($_GET["keyword"])){
    $keyword = $_GET["keyword"];
    include("library/class/search.class.php");
}
else{
    $keyword = '';
}
//Include template
include("tpl/".$tpl."/search.tpl.php");