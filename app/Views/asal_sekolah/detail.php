<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-3"><?= $title; ?></h2>
            <div class="card mb-3" witdh="100">
                <div class="row no-gutters">

                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title"><?= $asal_sekolah['nama_sekolah']; ?></h5>
                            <p class="card-text"><b>Alamat Sekolah: </b> <?= $asal_sekolah['alamat_sekolah']; ?></p>
                            <p class="card-text"><b>Status Sekolah: </b> <?= $asal_sekolah['status_sekolah']; ?></p>
                            <p class="card-text"><small class="text-muted"><b>Tanggal Dibuat: </b> <?= $asal_sekolah['created_at']; ?></small></p>

                            <a href="<?= base_url('/asal_sekolah/edit'); ?>/<?= $asal_sekolah['id']; ?>" class="btn btn-warning">Edit</a>

                            <!-- tombol DELETE -->
                            <form action="<?= base_url('/asal_sekolah'); ?>/<?= $asal_sekolah['id']; ?>" method="post" class="d-inline">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                            </form>
                            <!-- end tombol DELETE -->

                            <br><br>
                            <a href="<?= base_url('asal_sekolah/'); ?>">Kembali ke Daftar Sekolah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>