<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="card mt-4 shadow">
        <div class="card-header">
            <h2 class="w3-justify">Tabel Donasi Masuk</h2>
            <a href="/donasi/newTerkumpul" class="btn btn-primary"> <i class="fas fa-plus"></i>Buat Donasi</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Foto</td>
                        <td>Nama Donatur</td>
                        <td>Donasi</td>
                        <td>E-Money</td>
                        <td>Deskripsi</td>
                        <td>Id Donasi</td>
                        <td>Donasi Untuk</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($terkumpuls as $item) : ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><img src="/photos/<?= $item['photo'] ?>" alt="" width=250 height=350></td>
                        <td><?= $item['nama'] ?></td>
                        <td><?= $item['jumlah'] ?></td>
                        <td><?= $item['e-money'] ?></td>
                        <td><?= $item['deskripsi'] ?></td>
                        <td><?= $item['id_donasi'] ?></td>
                        <td><?= $item['donasi_untuk'] ?></td>
                    </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
<?= $this->endSection(); ?>