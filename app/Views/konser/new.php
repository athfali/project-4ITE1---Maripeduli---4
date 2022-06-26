<?= $this->extend('layout/dashboard-layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <h1>Postingan <?= session('name') ?></h1>
    <form action="/konser/create" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="pembuat">Pembuat Galangan Dana</label>
            <input type="text" class="form-control" id="pembuat" placeholder="Masukan Nama Pembuat" name="pembuat"
                value="<?= session('name') ?>" required/>
        </div>

        <div class="form-group">
            <label for="stok">Jumlah Target Penggalangan Dana</label>
            <input type="number" class="form-control" min="1" id="stok"
                placeholder="Masukan Jumlah Target Penggalangan Dana Dalam Bentuk Rupiah" name="stok" required />
        </div>

        <div class="form-group">
            <input type="hidden" name="harga" />
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