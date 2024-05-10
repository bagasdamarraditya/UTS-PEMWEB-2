<?php

include_once('koneksi.php');

// tangkap data dari form
$id = $_POST['id']; // Pastikan Anda memiliki input tersembunyi dengan nama "id" di formulir HTML
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$kategori = $_POST['kategori'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];
$unit_kerja_id = $_POST['unit_kerja_id'];

$query = "UPDATE paramedik SET nama='$nama', gender='$gender', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', kategori='$kategori', telepon='$telepon', alamat='$alamat', unit_kerja_id='$unit_kerja_id' WHERE id='$id'";

// eksekusi query
if ($dbh->query($query)) {
    header('Location: paramedik.php');
} else {
    echo "Gagal menyimpan data";
}
?>
