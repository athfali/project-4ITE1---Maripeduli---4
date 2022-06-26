<?= $this->extend('layout/admin-layout') ?>
<?= $this->section('content') ?>

<section class="signup-section" id="signup">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="fas fa-user fa-2x mb-2 text-black"></i>
                <h2 class="text-black mb-5">Silahkan edit data User</h2>
                <h5 class="text-black form-label d-flex">Update User : <?= $data['nama'] ?></h5>

                <form action="/donasi/<?= $data['id'] ?>/updateUser" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put" />
                    <input type="hidden" name="oldphoto" value="<?=$data['photo']?>" />

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Pembuat</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="emailHelp"
                            placeholder="Masukan Nama Pembuat..." required name="nama" value="<?= $data['nama'] ?>">
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Email</label>
                        <input type="text" class="form-control" id="email" aria-describedby="emailHelp"
                            placeholder="Masukan Nama Pembuat..." required name="email" value="<?= $data['email'] ?>">
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Usia</label>
                        <input type="text" class="form-control" id="usia" aria-describedby="emailHelp"
                            placeholder="Masukan Usia Anda..." required name="usia" value="<?= $data['usia'] ?>">
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">No Telepon</label>
                        <input type="text" class="form-control" id="nomor_telepon" aria-describedby="emailHelp"
                            placeholder="Masukan Nomer Telephone..." required name="nomor_telepon"
                            value="<?= $data['nomor_telepon'] ?>">
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Alamat</label>
                        <input type="text" class="form-control" id="alamat" aria-describedby="emailHelp"
                            placeholder="Masukan Alamat Anda..." required name="alamat" value="<?= $data['alamat'] ?>"
                            name="alamat">
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Role</label>
                        <input type="text" class="form-control" id="level" aria-describedby="emailHelp"
                            placeholder="role... " required name="level" value="<?= $data['level'] ?>">
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Photo</label>
                        <input type="file" class="form-control" id="example-product-photo" aria-describedby="photoHelp"
                            placeholder="<?= $data['photo'] ?>" name="photo">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>