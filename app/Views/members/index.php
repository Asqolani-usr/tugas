<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h2>Data Anggota</h2>
        <a href="<?= base_url('members/create') ?>" class="btn btn-primary">Tambah Anggota</a>
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
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php /* foreach ($members as $member): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= esc($member['name']) ?></td>
                <td><?= esc($member['address']) ?></td>
                <td><?= esc($member['phone']) ?></td>
                <td><?= esc($member['email']) ?></td>
                <td>
                    <a href="<?= base_url('members/edit/' . $member['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                    <form action="<?= base_url('members/delete/' . $member['id']) ?>" method="post" class="d-inline">
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
                <td>Andi Wijaya</td>
                <td>Jl. Merdeka No. 10, Jakarta</td>
                <td>081234567890</td>
                <td>andi.w@example.com</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Siti Aminah</td>
                <td>Jl. Pahlawan No. 25, Surabaya</td>
                <td>087712345678</td>
                <td>siti.a@example.com</td>
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
