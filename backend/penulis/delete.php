<?php

include '../config.php';
$id = $_GET['id'];

$result = $conn->query("DELETE FROM tbl_penulis WHERE id = $id");

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