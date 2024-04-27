<?php
require '../config.php';
$id = $_POST['id'];
$nama_toko = $_POST['nama_toko']; 


$result = $conn->query("UPDATE tbl_toko SET nama_toko = '$nama_toko' WHERE id = $id");

if ($result) {
    $code = 200;
    $message = 'Success';
} else {
    $code = 500;
    $message = 'Error';
} 

echo json_encode([
    'Response' => $code,
    'Message' => $message
]);
