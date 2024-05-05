<?php
include '../config.php';

$result = $conn->query("SELECT * FROM tbl_toko");

$respons= [];


while ($row = $result->fetch_assoc()) {
    $data['id'] = $row['id'];
    $data['nama_toko'] = $row['nama_toko'];
    $data['daerah'] = $row['daerah'];

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
