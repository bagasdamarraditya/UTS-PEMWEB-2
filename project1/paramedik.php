<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');
?>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Paramedik</h3>
        <a href="paramedik_create.php" class="btn btn-primary">+ Paramedik</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Kategori</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Unit Kerja</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach ($paramediks as $paramedik) : ?>
                    <tr>
                        <td><?= ++$no; ?></td>
                        <td><?= $paramedik['nama'] ?></td>
                        <td><?= $paramedik['gender'] ?></td>
                        <td><?= $paramedik['tmp_lahir'] ?></td>
                        <td><?= $paramedik['tgl_lahir'] ?></td>
                        <td><?= $paramedik['kategori'] ?></td>
                        <td><?= $paramedik['telepon'] ?></td>
                        <td><?= $paramedik['alamat'] ?></td>
                        <td><?= $paramedik['nama_unit_kerja_id'] ?></td>
                        <td>
                            <a href="paramedik_edit.php?id=<?= $paramedik['id'] ?>" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="paramedik_delete.php?id=<?= $paramedik['id'] ?>" class="btn btn-danger">
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
