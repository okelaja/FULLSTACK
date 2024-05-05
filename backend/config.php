<?php
$conn = mysqli_connect("localhost","admin","bismillah","bookstore");

    // if ($conn->connect_error) {
    //     echo "Galal";
    // }else{
    //     echo "berhasil";
    // }

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
