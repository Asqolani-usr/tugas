<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <h2>Dashboard</h2>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Total Buku</div>
                <div class="card-body">
                    <h5 class="card-title">150</h5>
                    <p class="card-text">Judul</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Total Anggota</div>
                <div class="card-body">
                    <h5 class="card-title">75</h5>
                    <p class="card-text">Orang</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Buku Sedang Dipinjam</div>
                <div class="card-body">
                    <h5 class="card-title">25</h5>
                    <p class="card-text">Eksemplar</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <h4>Selamat Datang di Sistem Informasi Perpustakaan!</h4>
        <p>Gunakan menu navigasi di atas untuk mengelola data buku, anggota, dan peminjaman.</p>
    </div>
</div>
<?= $this->endSection() ?>
