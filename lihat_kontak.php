<?php
include 'config.php';
$result = $conn->query("SELECT * FROM kontak ORDER BY waktu DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Pesan Masuk</title>
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body class="p-4">
  <h2>Data Pesan dari Pengguna</h2>
  <table class="table table-bordered mt-3">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pesan</th>
        <th>Waktu</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no = 1;
      while ($row = $result->fetch_assoc()) {
        echo "<tr>
          <td>{$no}</td>
          <td>{$row['nama']}</td>
          <td>{$row['email']}</td>
          <td>{$row['pesan']}</td>
          <td>{$row['waktu']}</td>
        </tr>";
        $no++;
      }
      ?>
    </tbody>
  </table>
</body>
</html>
