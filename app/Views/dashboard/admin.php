<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="card mt-4 shadow">
        <div class="card-header">
            <h2 class="w3-justify">Tabel Admin</h2>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Foto</td>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>No Telepon</td>
                        <td>Alamat</td>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 0; ?>
                    <?php foreach ($admins as $item) : ?>
                        <tr>
                            <td><?= $no += 1; ?></td>
                            <td><img src="/photos/<?= $item['photo'] ?>" alt="" width=220 height=220></td>
                            <td><?= $item['nama'] ?></td>
                            <td><?= $item['email'] ?></td>
                            <td><?= $item['nomor_telepon'] ?></td>                            
                            <td><?= $item['alamat'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    
<?= $this->endSection(); ?>    