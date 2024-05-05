<?php
require '../config.php';
$id = $_POST['id'];
$nama_penulis = $_POST['nama_penulis']; 
$asal = $_POST['asal']; 


$result = $conn->query("UPDATE tbl_penulis SET nama_penulis = '$nama_penulis', asal = '$asal' WHERE id = $id");

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
