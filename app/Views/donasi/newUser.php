<?= $this->extend('layout/admin-layout'); ?>
<?= $this->section('content'); ?>

<section class="signup-section" id="signup">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="fas fa-user fa-2x mb-2 text-black"></i>
                <h2 class="text-black mb-5">Silahkan mengisi form user terlebih dahulu</h2>
                <form action="/donasi/createUser" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="text-black form-label d-flex">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Depan Anda..."
                            name="nama" required />
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukan Email Anda..."
                            name="email" required />
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Usia</label>
                        <input type="number" class="form-control" min="1" id="usia" placeholder="Masukan Usia anda..."
                            name="usia" required />
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">No Telephone</label>
                        <input type="number" class="form-control" min="1" id="noTelp"
                            placeholder="Masukan No Telephon anda..." name="nomor_telepon" required />
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Alamat</label>
                        <textarea type="text" class="form-control" id="alamat" aria-describedby="emailHelp"
                            placeholder="Masukan Alamat Anda..." required name="alamat"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Role</label>
                        <input type="text" class="form-control" id="level" aria-describedby="emailHelp"
                            placeholder="level... " required name="level" value="user" disabled>
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Foto</label>
                        <p><small>gambar yang diupload harus landscape dan minimal berukuran 1900 x 1080</small></p>
                        <input type="file" class="form-control" id="example-product-photo" aria-describedby="photoHelp"
                            name="photo">
                    </div>

                    <button type="submit" class="btn btn-secondary w-100 bg-custom1 p-15">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>