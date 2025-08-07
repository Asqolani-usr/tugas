<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <h2>Edit Buku</h2>
    <hr>
    <form action="<?= base_url('books/update/' /* . $book['id'] */) ?>" method="post">
        <?= csrf_field() ?>
        <input type="hidden" name="_method" value="PUT">
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= esc($book['title'] ?? 'Contoh Judul') ?>" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="author" name="author" value="<?= esc($book['author'] ?? 'Contoh Penulis') ?>" required>
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Penerbit</label>
            <input type="text" class="form-control" id="publisher" name="publisher" value="<?= esc($book['publisher'] ?? 'Contoh Penerbit') ?>" required>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Tahun Terbit</label>
            <input type="number" class="form-control" id="year" name="year" min="1900" max="<?= date('Y') ?>" value="<?= esc($book['year'] ?? '2021') ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url('books') ?>" class="btn btn-secondary">Batal</a>
    </form>
    <p class="mt-3"><em>* Variabel `book` untuk mengisi form telah diberi nilai contoh. Silakan sesuaikan saat Controller dan Model siap.</em></p>
</div>
<?= $this->endSection() ?>
