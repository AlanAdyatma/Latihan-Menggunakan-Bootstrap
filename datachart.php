<?php
include 'config.php';

// Ambil data dari tabel statistik
$result = $conn->query("SELECT tahun, jumlah FROM statistik ORDER BY tahun ASC");

$data = [];
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}

// Kirim sebagai JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
