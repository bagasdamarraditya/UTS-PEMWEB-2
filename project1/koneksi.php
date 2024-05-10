<?php

$host = 'localhost';
$db = 'db_puskesmas';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

// buat objek koneksinya
$dbh = new PDO($dsn, $user, $pass, $opt);

$query = "SELECT p.*, u.nama AS nama_unit_kerja_id
          FROM paramedik p
          LEFT JOIN unit_kerja_id u ON p.unit_kerja_id = u.id";
$paramediks = $dbh->query($query);

?>
