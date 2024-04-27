<?php
include 'config.php';

$nama = $_GET['nama'];

$result = $conn->query("SELECT * FROM tbl_produk WHERE nama_barang LIKE '%$nama%' ");

$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

if ($data != null) {
    http_response_code(200);
    $code = 200;
    $message = 'Get Detail Data Successfully';
} else {
    $code = 404;
    $message = 'Data Not Found';
}

echo json_encode([
    'Response' => $code,
    'Message' => $message,
    'Data' => $data
]);
