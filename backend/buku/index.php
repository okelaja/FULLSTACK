<?php
include '../config.php';

$result = $conn->query("SELECT * FROM tbl_buku");

$respons= [];


while ($row = $result->fetch_assoc()) {
    $data['id'] = $row['id'];
    $data['judul'] = $row['judul'];
    // $data['deskripsi'] = $row['deskripsi'];
    $data['harga'] = $row['harga'];
    $data['penulis_id'] = $row['penulis_id'];
    $data['toko_id'] = $row['toko_id'];

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
