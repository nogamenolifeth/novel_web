<?php

include("config.php");

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