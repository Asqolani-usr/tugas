<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <h2>Tambah Peminjaman Baru</h2>
    <hr>
    <form action="<?= base_url('borrowings/store') ?>" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="book_id" class="form-label">Pilih Buku</label>
            <select class="form-select" id="book_id" name="book_id" required>
                <option value="">-- Pilih Judul Buku --</option>
                <?php /* foreach($books as $book): ?>
                    <option value="<?= $book['id'] ?>"><?= esc($book['title']) ?></option>
                <?php endforeach; */ ?>
                <!-- Contoh Data Statis -->
                <option value="1">Belajar CodeIgniter 4</option>
                <option value="2">Mastering PHP 8</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="member_id" class="form-label">Pilih Anggota</label>
            <select class="form-select" id="member_id" name="member_id" required>
                <option value="">-- Pilih Nama Anggota --</option>
                <?php /* foreach($members as $member): ?>
                    <option value="<?= $member['id'] ?>"><?= esc($member['name']) ?></option>
                <?php endforeach; */ ?>
                <!-- Contoh Data Statis -->
                <option value="1">Andi Wijaya</option>
                <option value="2">Siti Aminah</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="borrow_date" class="form-label">Tanggal Pinjam</label>
            <input type="date" class="form-control" id="borrow_date" name="borrow_date" value="<?= date('Y-m-d') ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= base_url('borrowings') ?>" class="btn btn-secondary">Batal</a>
    </form>
    <p class="mt-3"><em>* Looping data untuk dropdown `Buku` dan `Anggota` telah dikomentari. Silakan hapus komentar setelah Controller dan Model siap.</em></p>
</div>
<?= $this->endSection() ?>
