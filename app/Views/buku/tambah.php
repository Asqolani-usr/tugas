<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>


<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Organisasi</h1>

    <form action="<?= base_url('organisasi/simpan'); ?>" method="post">
        <?= csrf_field(); ?>

        <div class="form-group">
            <label for="kode">Kode Organisasi</label>
            <input type="text" name="kode" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nama">Nama Organisasi</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= base_url('organisasi'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection(); ?>
