<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="card mt-4 shadow">
        <div class="card-header">
            <h2 class="w3-justify">Tabel Donasi</h2>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Foto</td>
                        <td>Nama Pembuat</td>
                        <td>Membutuhkan</td>
                        <td>Terkumpul</td>
                        <td>Deskripsi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($donasis as $item) : ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><img src="/photos/<?= $item['photo'] ?>" alt="" width=250 height=150></td>
                        <td><?= $item['nama_pembuat'] ?></td>
                        <td><?= $item['membutuhkan'] ?></td>
                        <td><?= $item['terkumpul'] ?></td>
                        <td><?= $item['deskripsi'] ?></td>
                    </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
<?= $this->endSection(); ?>