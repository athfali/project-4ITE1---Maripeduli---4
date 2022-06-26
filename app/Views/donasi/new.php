<?= $this->extend('layout/admin-layout') ?>
<?= $this->section('content') ?>

<section class="signup-section" id="signup">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="fas fa-coins fa-2x mb-2 text-black"></i>
                <h2 class="text-black mb-5">Silahkan mengisi form donasi terlebih dahulu</h2>
                <form action="/donasi/create" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="text-black form-label d-flex">Pembuat Galangan Dana</label>
                        <input type="text" class="form-control" id="nama_pembuat" placeholder="Masukan Nama Pembuat"
                            name="nama_pembuat" required />
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Jumlah Target Penggalangan Dana</label>
                        <input type="text" class="form-control" id="membutuhkan"
                            placeholder="Masukan Jumlah Target Penggalangan Dana Dalam Bentuk Rupiah" name="membutuhkan"
                            required />
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="terkumpul" />
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Deskripsi</label>
                        <textarea type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp"
                            placeholder="Masukan Deskripsi..." required name="deskripsi"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Foto</label>
                        <p><small>gambar yang diupload harus landscape dan minimal berukuran 1900 x 1080</small></p>
                        <input type="file" class="form-control" id="example-product-photo" aria-describedby="photoHelp"
                            name="photo">
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="komentar" />
                    </div>

                    <button type="submit" class="btn btn-secondary w-100 bg-custom1 p-15">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>