<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <h2>Edit Data Anggota</h2>
    <hr>
    <form action="<?= base_url('members/update/' /* . $member['id'] */) ?>" method="post">
        <?= csrf_field() ?>
        <input type="hidden" name="_method" value="PUT">
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= esc($member['name'] ?? 'Contoh Nama') ?>" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <textarea class="form-control" id="address" name="address" rows="3" required><?= esc($member['address'] ?? 'Contoh Alamat') ?></textarea>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Nomor Telepon</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="<?= esc($member['phone'] ?? '08123456789') ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= esc($member['email'] ?? 'contoh@email.com') ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url('members') ?>" class="btn btn-secondary">Batal</a>
    </form>
    <p class="mt-3"><em>* Variabel `member` untuk mengisi form telah diberi nilai contoh. Silakan sesuaikan saat Controller dan Model siap.</em></p>
</div>
<?= $this->endSection() ?>
