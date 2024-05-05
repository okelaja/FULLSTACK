<?php

include '../config.php';

$nama_toko = $_POST['nama_toko'];
$daerah = $_POST['daerah'];


$result = $conn->query("INSERT INTO tbl_toko VALUES (default, '$nama_toko','$daerah')");

$respons = [];

if ($result) {
    $code = '201';
    $message = 'Data Added Succesfully';
    $toko_id = $conn->insert_id;
    $data = [
        'id' => $toko_id, 
        'nama_toko' => $nama_toko,
        'daerah' => $daerah,

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