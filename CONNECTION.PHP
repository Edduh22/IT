<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "login";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{
    die("failed to connect!");
}
