<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Siswa</div>
                <div class="col-4">
                    <a href="?m=siswa&s=add" class="btn btn-lg btn-primary float-end">Tambah</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Kelas</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('config.php');
                        $sql = "SELECT siswa.id, nis, nama, jk, tempat_lahir, tanggal_lahir, kelas_id, foto FROM siswa";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0 ) {
                            $no = 1;
                            while ($r = mysqli_fetch_assoc($result)) {
                                $foto = isset($r['foto']) ? $r ['foto'] : 'not_found.png';
                                echo '<tr>
                                    <td>'.$no.'</td>
                                    <td>'.$r['nis'].'</td>
                                    <td>'.$r['nama'].'</td>
                                    <td>'.$r['jk'].'</td>
                                    <td>'.$r['tempat_lahir'].'</td>
                                    <td>'.date('d F Y', strtotime ($r['tanggal_lahir'])).'</td>
                                    <td>'.$r['kelas_id'].'</td>
                                    <td> <img style="object-fit:cover; aspect-ratio: 1/1;" width="120px" heigth="auto" src="siswa/foto/'.$foto.'" alt="Undefined"> </td>
                                    <td>
                                        <a href="?m=siswa&s=edit&id='.$r['id'].'" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="?m=siswa&s=delete&id='.$r['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin siswa akan dihapus?, yakin kah???\')">Hapus</a>
                                    </td>
                                </tr>';
                                $no++;
                            }
                        } else {
                            echo "<tr>
                                <td colspan='9' align='center'>Data Kosong</td>
                                </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>