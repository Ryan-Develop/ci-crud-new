<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Ubah Data Mahasiswa</h2>

            <?= $validation->listErrors(); ?>

            <form action="/mahasiswa/update/<?= $mahasiswa['id']; ?>" method="get">
                <?= csrf_field(); ?>
                <input type="hidden" name="nim" value="<?= $mahasiswa['nim']; ?>">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" autofocus value="<?= $mahasiswa['nama']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" value="<?= $mahasiswa['nim']; ?>">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                        <div class="col-sm-10">
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $mahasiswa['jenis_kelamin']; ?>">
                                <option value="<?= $mahasiswa['jenis_kelamin']; ?>"><?= $mahasiswa['jenis_kelamin']; ?></option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Agama</legend>
                        <div class="col-sm-10">
                            <select class="form-control" id="agama" name="agama" value="<?= $mahasiswa['agama']; ?>">
                                <option value="<?= $mahasiswa['agama']; ?>"><?= $mahasiswa['agama']; ?></option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Konghuchu">Konghuchu</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Program Studi" value="<?= $mahasiswa['prodi']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ttl" class="col-sm-2 col-form-label">TTL</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Kota, DD MM YY" value="<?= $mahasiswa['ttl']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?= $mahasiswa['alamat']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="asal_sekolah" class="col-sm-2 col-form-label">Asal Sekolah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah" value="<?= $mahasiswa['asal_sekolah']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="gambar" name="gambar" placeholder="Gambar" value="<?= $mahasiswa['gambar']; ?>">
                    </div>
                </div>
                <br>
                <!-- tombol -->
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </div>
                <!-- end tombol -->
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>