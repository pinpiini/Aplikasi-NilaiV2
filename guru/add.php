<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Guru</div>
                <div class="col-4">
                    <a href="?m=guru&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=guru&s=save" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="number" name="nip" class="form-control" placeholder="Nomor Induk Guru" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-check">
                        <label for="">Jenis Kelamin : </label> <br>
                        <input type="radio" class="btn-check" name="jk" id="option5" value="L" autocomplete="off" required>
                        <label class="btn" for="option5">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="btn-check" name="jk" id="option6" value="P" autocomplete="off">
                        <label class="btn" for="option6">Perempuan</label>
                    </div>
                    <br>
                    <div class="mb-3">
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Tanggal Lahir" name="tanggal_lahir" class="form-control" onblur="(this.type='text')" onfocus="(this.type='date')" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="telepon" class="form-control" placeholder="Telepon" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Foto Profil :</label>
                        <input type="file" name="foto" class="form-control" accept="image/*">
                    </div>
                    
                    <div class="mb-3">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

