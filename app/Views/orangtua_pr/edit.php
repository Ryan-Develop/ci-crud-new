<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Ubah Data Orang Tua (Wanita)</h2>
            <form action="/orangtua_pr/update/<?= $orangtua_pr['id']; ?>" method="get">
                <?= csrf_field(); ?>
                <input type="hidden" name="nik" value="<?= $orangtua_pr['nik']; ?>">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" autofocus value="<?= $orangtua_pr['nama']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="<?= $orangtua_pr['nik']; ?>">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Agama</legend>
                        <div class="col-sm-10">
                            <select class="form-control" id="agama" name="agama" value="<?= $orangtua_pr['agama']; ?>">
                                <option value="<?= $orangtua_pr['agama']; ?>"><?= $orangtua_pr['agama']; ?></option>
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
                    <label for="pekerjaan" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Kota, DD MM YY" value="<?= $orangtua_pr['ttl']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" value="<?= $orangtua_pr['pekerjaan']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pendidikan_terakhir" class="col-sm-2 col-form-label">Pendidikan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" placeholder="Pendidikan Terakhir" value="<?= $orangtua_pr['pendidikan_terakhir']; ?>">
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