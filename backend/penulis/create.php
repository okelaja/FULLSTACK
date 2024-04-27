<?php

include '../config.php';

$nama_penulis = $_POST['nama_penulis'];


$result = $conn->query("INSERT INTO tbl_penulis VALUES (default, '$nama_penulis')");

$respons = [];

if ($result) {
    $code = '201';
    $message = 'Data Added Succesfully';
    $penulis_id = $conn->insert_id;
    $data = [
        'id' => $penulis_id, 
        'nama_penulis' => $nama_penulis,

    ];
}else {
    $code = '500';  
    $message = 'Failed to add data';
    
}

echo json_encode([ 
    'Response' => $code,
    'Message' => $message,
    'Data' => $data
]);