<?php
include_once('koneksi.php');

// tangkap data dari form
$nama = $_POST['nama'];
$id = $_POST['id'];

// buat query update
$query = "UPDATE unit_kerja_id SET nama='$nama' WHERE id='$id'";

// eksekusi query
$dbh->query($query);

// Redirect kembali ke halaman unit_kerja_id.php
header('Location: unit_kerja_id.php');
?>
