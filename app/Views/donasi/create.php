<?= $this->extend('layout/dashboard-layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <h1>Donasi</h1>
    <form action="/donasi/create" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nama_pembuat">Pembuat Galangan Dana</label>
            <input type="text" class="form-control" id="nama_pembuat" placeholder="Masukan Nama Pembuat" name="nama_pembuat"
                required/>
        </div>

        <div class="form-group">
            <label for="membutuhkan">Jumlah Target Penggalangan Dana</label>
            <input type="text" class="form-control" id="membutuhkan"
                placeholder="Masukan Jumlah Target Penggalangan Dana Dalam Bentuk Rupiah" name="membutuhkan" required />
        </div>

        <div class="form-group">
            <input type="hidden" name="terkumpul" />
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="5" cols="40" type="text"
                placeholder="Masukan Deskripsi Postingan anda" name="deskripsi" required></textarea>
        </div>

        <div class="form-group">
            <label for="example-product-photo">Foto</label>
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

<?= $this->endSection() ?>