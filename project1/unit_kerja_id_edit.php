<?php
include_once('koneksi.php');

// Ambil nilai id dari URL
$id = $_GET['id'];

// Ambil data unit kerja berdasarkan id
$query = "SELECT nama FROM unit_kerja_id WHERE id = $id";
$result = $dbh->query($query);
$unit_kerja_id = $result->fetch(PDO::FETCH_ASSOC);

include_once('top.php');
include_once('menu.php');
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Unit Kerja</h1>
    <form action="unit_kerja_id_update.php" method="post">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?= $unit_kerja_id['nama'] ?>">
                <input type="hidden" name="id" value="<?= $id ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once('bottom.php');
?>
