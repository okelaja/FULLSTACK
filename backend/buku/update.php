<?php
require '../config.php';
$id = $_POST['id'];
$judul = $_POST['judul']; 
$deskripsi = $_POST['deskripsi']; 
$sampul = $_POST['sampul']; 
$harga = $_POST['harga']; 
$penulis_id = $_POST['penulis_id']; 
$toko_id = $_POST['toko_id']; 


$result = $conn->query("UPDATE tbl_buku SET judul = '$judul', deskripsi = '$deskripsi', sampul = '$sampul', harga = '$harga', penulis_id = '$penulis_id', toko_id = '$toko_id'  WHERE id = $id");

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
