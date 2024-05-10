<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM unit_kerja_id";
$unit_kerja_ids = $dbh->query($query);

?>
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Unit Kerja</h3>
        <a href="unit_kerja_id_create.php" class="btn btn-primary">+ Unit Kerja</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach($unit_kerja_ids as $unit_kerja_id) : ?>
                    <tr>
                        <td><?= ++$no; ?></td>
                        <td><?= $unit_kerja_id['nama'] ?></td>
                        <td>
                            <a href="unit_kerja_id_edit.php?id=<?= $unit_kerja_id['id'] ?>" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="unit_kerja_id_delete.php?id=<?= $unit_kerja_id['id'] ?>" class="btn btn-danger">
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
