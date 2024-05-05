<?php

include '../config.php';

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$sampul = $_POST['sampul'];
$harga = $_POST['harga'];
$penulis_id = $_POST['penulis_id'];
$toko_id = $_POST['toko_id'];


$result = $conn->query("INSERT INTO tbl_buku VALUES (default, '$judul', '$deskripsi', '$sampul', $harga, $penulis_id, $toko_id)");

$respons = [];

if ($result) {
    $code = '201';
    $message = 'Data Added Succesfully';
    $buku_id = $conn->insert_id;
    $data = [
        'id' => $buku_id, 
        'judul' => $judul,
        'deskripsi' => $deskripsi,
        'sampul' => $sampul,
        'harga' => $harga,
        'penulis_id' => $penulis_id,
        'toko_id' => $toko_id,

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