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

            <div class="card-body">
                <form action="?m=kelas&s=save" method="post">
                    <div class="mb-2">
                        <input type="text" name="kelas" class="form-control" placeholder="Kelas" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="kapasitas" class="form-control" placeholder="Kapasitas" required autofocus>
                    </div>
                    <div class="mb-2">
                        <input type="text" name="terisi" class="form-control" placeholder="Terisi" required autofocus>
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

  