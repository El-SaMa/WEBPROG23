<?php

$servername = "dd1f0f578167";
$db_user="capp1";
$db_password = "kaunisSu0mi";
$db_name = "capp1";

$con = new mysqli($servername, $db_user, $db_password, $db_name);

if ($con->connect_error)
{
     die("error errot erro err er e ....zzzz". $con->connect_error) ;
} else {
    echo "success";
}




?>