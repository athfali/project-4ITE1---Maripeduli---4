<?= $this->extend('layout/admin-layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="card mt-4 shadow">
        <div class="card-header">
            <h2 class="w3-justify"><i class="fas fa-user-cog"></i> Tabel Admin</h2>
            <a href="/donasi/newAdmin" class="btn btn-primary"><i class="fas fa-user-cog"></i> Tambah Admin</a>
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
                        <td>level</td>
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
                            <td><?= $item['level'] ?></td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-warning" style="height: 35px;margin-right:10px" href="/donasi/<?= $item['id'] ?>/editAdmin"><i class="fas fa-edit"></i></a>
                                    <form action="/donasi/<?= $item['id'] ?>/deleteAdmin" method="post" onsubmit="return confirm(`Are you sure?`)">
                                        <input type="hidden" name="_method" value="delete" />
                                        <button type="submit" class="btn btn-danger" style="height: 35px;"><i class="fas fa-trash"></i></button>
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