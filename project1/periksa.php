<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

// Query untuk mendapatkan data periksa
$query = "SELECT * FROM periksa";
$periksas = $dbh->query($query);

?>
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Periksa</h3>
        <a href="periksa_create.php" class="btn btn-primary">+ Periksa</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Berat</th>
                    <th>Tinggi</th>
                    <th>Tensi</th>
                    <th>Keterangan</th>
                    <th>Nama Pasien</th>
                    <th>Dokter</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach($periksas as $periksa) :
                    
                    // Query untuk mendapatkan nama pasien
                    $query_pasien = "SELECT nama FROM pasien WHERE id = " . $periksa['pasien_id'];
                    $result_pasien = $dbh->query($query_pasien);
                    $pasien = $result_pasien->fetch(PDO::FETCH_ASSOC);
                    
                    // Query untuk mendapatkan nama dokter
                    $query_dokter = "SELECT nama FROM paramedik WHERE id = " . $periksa['dokter_id'];
                    $result_dokter = $dbh->query($query_dokter);
                    $dokter = $result_dokter->fetch(PDO::FETCH_ASSOC);
                ?>
                    <tr>
                        <td><?= ++$no; ?></td>
                        <td><?= $periksa['tanggal'] ?></td>
                        <td><?= $periksa['berat'] ?></td>
                        <td><?= $periksa['tinggi'] ?></td>
                        <td><?= $periksa['tensi'] ?></td>
                        <td><?= $periksa['keterangan'] ?></td>
                        <td><?= $pasien['nama'] ?></td>
                        <td><?= $dokter['nama'] ?></td>
                        <td>
                            <a href="periksa_edit.php?id=<?= $periksa['id'] ?>" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="periksa_delete.php?id=<?= $periksa['id'] ?>" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include_once('bottom.php')
?>
