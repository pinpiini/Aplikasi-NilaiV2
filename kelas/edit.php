<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Kelas</div>
                <div class="col-4">
                    <a href="?m=kelas&s=view" class="btn btn-large btn-primary float-end">
                        <i class="fas fa-plus">Kembali</i> 
                    </a>
                </div>
            </div>
<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM kelas WHERE id = '$id'";
$result = mysqli_query($con, $sql) ;
$r = mysqli_fetch_assoc($result);
?>
            <div class="card-body">
                <form action="?m=kelas&s=update" method="post">
                    <div class="mb-2">
                        <input type="text" value="<?= $r['kelas']; ?>" name="kelas" class="form-control" placeholder="Kelas" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" value="<?= $r['kapasitas']; ?>" name="kapasitas" class="form-control" placeholder="Kapasitas" required autofocus>
                    </div> 
                    <div class="mb-2">
                        <input type="text" value="<?= $r['terisi']; ?>" name="terisi" class="form-control" placeholder="Terisi" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $r['id']; ?>">
                        <input type="reset" class="btn btn-secondary" value="Reset">&nbsp;
                        <input type="submit" class="btn btn-primary" value="Update" name="update">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

  