<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Siswa</div>
                <div class="col-4">
                    <a href="?m=siswa&s=view" class="btn btn-large btn-primary float-end">
                        <i class="fas fa-plus">Kembali</i> 
                    </a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=siswa&s=save" method="post" enctype="multipart/form-data">
                    <div class="mb-2">
                        <input type="number" name="nis" class="form-control" placeholder="Nomor Induk Siswa" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Nama Siswa" required autofocus>
                    </div>
                    <div class="mb-2">
                        <label for="">Jenis-Kelamin: &nbsp</label>
                        <input type="radio" name="jk"  value="L" checked>Laki-Laki
                        <input type="radio" name="jk"  value="P" checked>Perempuan
                    </div>
                    <div class="mb-3">
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir (Isi dengan nama kabupaten/kota)"  autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir Siswa" autofocus>
                    </div>
                    <div class="mb-3">
                        <select name="kelas_id" class="form-control">
                            <option value="">Pilih Kelas</option>
                            <?php
                                include_once('config.php');
                                $sql = "SELECT * FROM kelas";
                                $result = mysqli_query ($con, $sql);
                                while ($r = mysqli_fetch_assoc($result)) {
                                    echo '<option value="'.$r['id'].'">'.$r['kelas'].'</option>';
                                }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        Masukan Foto
                        <input type="file" name="foto" class="form-control" autofocus accept="image/*   ">
                    </div>
                    <div class="mb-3">
                        <input type="reset" class="btn btn-secondary" value="Reset">&nbsp;
                        <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $kelas_id = $_POST['kelas_id'];

    $sql = "INSERT INTO siswa (nis, nama, jk, tempat_lahir, tanggal_lahir, kelas_id) VALUES ('$nis', '$nama', '$jk', '$tempat_lahir', '$tanggal_lahir', '$kelas_id')";

    if (mysqli_query($config, $sql)) {
        header('Location: ?m=siswa&s=view');
    } else {
        echo 'Error: ' . mysqli_error($config);
    }
}
?>