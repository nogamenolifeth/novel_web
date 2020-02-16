<?php

include("config.php");
if(debug_mode==false){
    error_reporting(E_ERROR | E_PARSE);
}
else{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

$tpl = $main->getconfig("system_template");

if(isset($_GET["module"])){
    if(file_exists("library/module/".$_GET["module"].".module.php")){
        include("library/module/".$_GET["module"].".module.php");
    }
    else{
        header("location: 404.html");
    }
}
else{
    include("library/module/index.module.php");
}