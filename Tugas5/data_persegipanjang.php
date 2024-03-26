<?php
require_once('class_persegipanjang.php');

// Membuat objek persegi panjang dengan panjang 5 dan lebar 3
$persegiPanjang = new PersegiPanjang(15, 3);

// Menghitung luas persegi panjang
$luas = $persegiPanjang->hitungLuas();
echo "Luas Persegi Panjang: " . $luas . "<br>";

// Menghitung keliling persegi panjang
$keliling = $persegiPanjang->hitungKeliling();
echo "Keliling Persegi Panjang: " . $keliling . "<br>";
?>
