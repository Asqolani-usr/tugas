<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h2>Riwayat Peminjaman</h2>
        <a href="<?= base_url('borrowings/create') ?>" class="btn btn-primary">Tambah Peminjaman</a>
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
                <th>Judul Buku</th>
                <th>Nama Peminjam</th>
                <th>Tgl Pinjam</th>
                <th>Tgl Kembali</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php /* foreach ($borrowings as $borrow): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= esc($borrow['book_title']) ?></td>
                <td><?= esc($borrow['member_name']) ?></td>
                <td><?= esc($borrow['borrow_date']) ?></td>
                <td><?= esc($borrow['return_date']) ?></td>
                <td>
                    <?php if ($borrow['status'] == 'borrowed'): ?>
                        <span class="badge bg-warning">Dipinjam</span>
                    <?php else: ?>
                        <span class="badge bg-success">Kembali</span>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if ($borrow['status'] == 'borrowed'): ?>
                    <form action="<?= base_url('borrowings/return/' . $borrow['id']) ?>" method="post" class="d-inline">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">
                        <button type="submit" class="btn btn-sm btn-info" onclick="return confirm('Tandai sebagai sudah kembali?')">Kembalikan</button>
                    </form>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; */ ?>
            <!-- Contoh Data Statis -->
            <tr>
                <td>1</td>
                <td>Belajar CodeIgniter 4</td>
                <td>Andi Wijaya</td>
                <td>2023-10-01</td>
                <td>-</td>
                <td><span class="badge bg-warning">Dipinjam</span></td>
                <td>
                     <a href="#" class="btn btn-sm btn-info">Kembalikan</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Mastering PHP 8</td>
                <td>Siti Aminah</td>
                <td>2023-09-25</td>
                <td>2023-10-02</td>
                <td><span class="badge bg-success">Kembali</span></td>
                <td>-</td>
            </tr>
        </tbody>
    </table>
    <p><em>* Looping data dari database telah dikomentari. Silakan hapus komentar setelah Controller dan Model siap.</em></p>
</div>
<?= $this->endSection() ?>
