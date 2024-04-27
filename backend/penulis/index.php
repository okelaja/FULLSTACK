<?php
include '../config.php';

$result = $conn->query("SELECT * FROM tbl_penulis");

$respons= [];


while ($row = $result->fetch_assoc()) {
    $data['id'] = $row['id'];
    $data['nama_penulis'] = $row['nama_penulis'];

    array_push($respons, $data);
}

if ($data != null) {
    echo json_encode([
        'Response' => 200,
        'Message' => 'Success',
        'produk' => $respons, 
    ]);
    
}else{
    echo json_encode([
        'Response' => 404,
        'Message' => 'Not Found',
        'produk' => $respons, 
    ]);
}
