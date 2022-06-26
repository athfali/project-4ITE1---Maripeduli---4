<?= $this->extend('layout/admin-layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="card mt-4 shadow">
        <div class="card-header">
            <h2 class="w3-justify"><i class="fas fa-hand-holding-usd"></i> Tabel Donasi Masuk</h2>
            <a href="/donasi/newTerkumpul" class="btn btn-primary"><i class="fas fa-hand-holding-usd"></i> Tambah Donasi</a>
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
                        <td>Action</td>
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
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-warning" style="height: 35px;margin-right:10px"
                                    href="/donasi/<?= $item['id'] ?>/editTerkumpul"><i class="fas fa-edit"></i></a>
                                <form action="/donasi/<?= $item['id'] ?>/deleteTerkumpul" method="post"
                                    onsubmit="return confirm(`Are you sure?`)">
                                    <input type="hidden" name="_method" value="delete" />
                                    <button type="submit" class="btn btn-danger" style="height: 35px;"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
<?= $this->endSection(); ?>