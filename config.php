<?php

//Db connect part
$conn = new mysqli("localhost","root","","amnovel");

if (!$conn) {
    exit("Fail to connect to database");
}

include("library/class/main.class.php");
$main = new Main($conn);
$extra = '';