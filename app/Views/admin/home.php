<?= $this->extend('layout/admin-layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="card mt-4 shadow">
        <div class="card-header">
            <h2 class="w3-justify"><i class="fas fa-coins"></i> Tabel Donasi</h2>
            <a href="/donasi/new" class="btn btn-primary"> <i class="fas fa-coins"></i> Tambah Appoiment</a>
            <a target="_blank" href="/export-pdf" class="btn btn-warning"> <i class="fa fa-file"></i> Export PDF</a>
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
                        <td>Action</td>
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
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-warning" style="height: 35px;margin-right:10px"
                                    href="/donasi/<?= $item['id'] ?>/edit"><i class="fas fa-edit"></i></a>
                                <form action="/donasi/<?= $item['id'] ?>/delete" method="post"
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