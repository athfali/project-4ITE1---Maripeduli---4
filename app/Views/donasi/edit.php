<?= $this->extend('layout/admin-layout') ?>
<?= $this->section('content') ?>

<section class="signup-section" id="signup">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="fas fa-coins fa-2x mb-2 text-black"></i>
                <h2 class="text-black mb-5">Silahkan edit data appoiment Donasi</h2>
                <h5 class="text-black form-label d-flex">Update Donasi <?= $data['nama_pembuat'] ?></h5>

                <form action="/donasi/<?= $data['id'] ?>/update" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put" />
                    <input type="hidden" name="oldphoto" value="<?=$data['photo']?>" />

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Pembuat</label>
                        <input type="text" class="form-control" id="nama_pembuat" aria-describedby="emailHelp"
                            placeholder="Masukan Nama Pembuat..." required name="nama_pembuat"
                            value="<?= $data['nama_pembuat'] ?>">
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Membutuhkan</label>
                        <input type="text" class="form-control" id="example-donasi-membutuhkan"
                            aria-describedby="emailHelp" placeholder="Enter product stock" required name="membutuhkan"
                            value="<?= $data['membutuhkan'] ?>">
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex"></label>
                        <input type="hidden" name="_method" name="terkumpul" id="terkumpul" value="put" />
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Deskripsi</label>
                        <input type="text" class="form-control" id="example-donasi-deskripsi"
                            aria-describedby="emailHelp" placeholder="Enter product name" required name="deskripsi"
                            value="<?= $data['deskripsi'] ?>" name="deskripsi">
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
    </div>
    <?= $this->endSection() ?>