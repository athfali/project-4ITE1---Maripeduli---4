<?= $this->extend('layout/admin-layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="card mt-4 shadow">
        <div class="card-header">
            <h2 class="w3-justify"><i class="fas fa-user"></i> Tabel User</h2>
            <a href="/donasi/newUser" class="btn btn-primary"><i class="fas fa-user"></i> Tambah User</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Photo</td>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>Usia</td>
                        <td>Nomor Telepon</td>
                        <td>Alamat</td>
                        <td>Level</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 0; ?>
                    <?php foreach ($users as $item) : ?>
                    <tr>
                    <td><?= $no += 1; ?></td>
                        <td><img src="/photos/<?= $item['photo'] ?>" alt="" width=220 height=220></td>
                        <td><?= $item['nama'] ?></td>
                        <td><?= $item['email'] ?></td>
                        <td><?= $item['usia'] ?></td>
                        <td><?= $item['nomor_telepon'] ?></td>
                        <td><?= $item['alamat'] ?></td>
                        <td><?= $item['level'] ?></td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-warning" style="height: 35px;margin-right:10px"
                                    href="/donasi/<?= $item['id'] ?>/editUser"><i class="fas fa-edit"></i></a>
                                <form action="/donasi/<?= $item['id'] ?>/deleteUser" method="post"
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

    <?= $this->endSection(); ?>