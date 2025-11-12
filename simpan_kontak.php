<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "siapsuruh";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$nama  = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';
$pesan = $_POST['pesan'] ?? '';

if ($nama && $email && $pesan) {
  $sql = "INSERT INTO kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Pesan berhasil dikirim!'); window.location='index.php';</script>";
  } else {
    echo "Gagal menyimpan data: " . $conn->error;
  }
} else {
  echo "Form belum lengkap!";
}

$conn->close();
?>
