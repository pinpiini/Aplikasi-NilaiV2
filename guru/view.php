<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Guru</div>
                <div class="col-4">
                    <a href="?m=guru&s=add" class="btn btn-lg btn-primary float-end">Tambah</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Absen</th>
                            <th>NIP</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Telepon</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('config.php');
                        $sql = "SELECT guru.id, nip, nama, jk, tempat_lahir, tanggal_lahir, telepon, foto FROM guru";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0 ) {
                            $no = 1;
                            while ($r = mysqli_fetch_assoc($result)) {
                                $foto = isset($r['foto']) ? $r ['foto'] : 'not_found.png';
                                echo '<tr>
                                    <td>'.$no.'</td>
                                    <td>'.$r['nip'].'</td>
                                    <td>'.$r['nama'].'</td>
                                    <td>'.$r['jk'].'</td>
                                    <td>'.$r['tempat_lahir'].'</td>
                                    <td>'.date('d F Y', strtotime ($r['tanggal_lahir'])).'</td>
                                    <td>'.$r['telepon'].'</td>
                                    <td> <img style="object-fit:cover; aspect-ratio: 1/1;" width="120px" heigth="auto" src="guru/foto/'.$foto.'" alt="Undefined"> </td>
                                    <td>
                                        <a href="?m=guru&s=edit&id='.$r['id'].'" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="?m=guru&s=delete&id='.$r['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin guru akan dihapus?, yakin kah???\')">Hapus</a>
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