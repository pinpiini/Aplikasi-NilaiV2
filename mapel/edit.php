<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Mata Pelajaran</div>
                <div class="col-4">
                    <a href="?m=mapel&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM mapel WHERE id='$id'";
$result = mysqli_query($con, $sql);
$r = mysqli_fetch_assoc($result)
?>

            <div class="card-body">
                <form action="?m=mapel&s=update" method="post">
                    <div class="mb-3">
                        <input type="text" name="mapel" value="<?= $r['mapel']; ?>" class="form-control" placeholder="Nama Mata Pelajaran" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="sks" value="<?= $r['sks']; ?>" class="form-control" placeholder="Jam Pelajaran" required>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $r['id']; ?>">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Update" name="update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>