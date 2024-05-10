<?php
include_once('koneksi.php');

// tangkap data dari form
$nama = $_POST['nama'];


// buat query insert
$query = "INSERT INTO unit_kerja_id (nama) VALUES ('$nama')";


// eksekusi query
if ($dbh->query($query)) {
    header('Location: unit_kerja_id.php');
} else {
    echo "Gagal menyimpan data";
}