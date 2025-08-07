<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h2>Daftar Buku</h2>
        <a href="<?= base_url('books/create') ?>" class="btn btn-primary">Tambah Buku</a>
    </div>
    <hr>
    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php /* foreach ($books as $book): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= esc($book['title']) ?></td>
                <td><?= esc($book['author']) ?></td>
                <td><?= esc($book['publisher']) ?></td>
                <td><?= esc($book['year']) ?></td>
                <td>
                    <a href="<?= base_url('books/edit/' . $book['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                    <form action="<?= base_url('books/delete/' . $book['id']) ?>" method="post" class="d-inline">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; */ ?>
            <!-- Contoh Data Statis -->
            <tr>
                <td>1</td>
                <td>Belajar CodeIgniter 4</td>
                <td>Ahmad Zaky</td>
                <td>Gramedia</td>
                <td>2023</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
             <tr>
                <td>2</td>
                <td>Mastering PHP 8</td>
                <td>Budi Santoso</td>
                <td>Elex Media</td>
                <td>2022</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
    <p><em>* Looping data dari database telah dikomentari. Silakan hapus komentar setelah Controller dan Model siap.</em></p>
</div>
<?= $this->endSection() ?>
