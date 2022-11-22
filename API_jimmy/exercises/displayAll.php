<?php
header("Content-type: application/json");
header("Access-Control-Allow_Method: GET");

require_once "db_connect.php";
require_once "toolBox.php";

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $sql = "SELECT * FROM car";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if ($result) {
        response(200, "Data fetched succesfully", $row);
    } else {
        response(400, "There was an error!");
    }
}

mysqli_close($connect);
