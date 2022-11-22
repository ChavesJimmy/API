<?php

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "cars";

$connect = new mysqli($localhost, $username, $password, $dbname);

if (!$connect) {
    echo "An error has occured";
} 
// else 
// {
//     echo "Success";
// }
