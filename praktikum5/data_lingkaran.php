<?php
require_once('class_lingkaran.php');
echo "Nilai PHI:" . Lingkaran::PHI;

// instansiasi objext lingkaran
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(8);

// Panggil method
echo "<br> Luas Lingkaran1:" . $lingkar1->getLuas();
echo "<br> Luas Lingkaran2:" . $lingkar2->getLuas();

echo "<br> Keliling Lingkaran1:" . $lingkar1->getKeliling();
echo "<br> Keliling Lingkaran2:" . $lingkar2->getKeliling();
