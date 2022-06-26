<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <form action="/konser/create" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="namadepan">Nama Depan</label>
            <input type="text" class="form-control" id="pembuat" placeholder="Masukan Nama Depan Anda..." name="namadepan"
                value="" required/>
        </div>
        <div class="form-group">
            <label for="namabelakang">Nama Belakang</label>
            <input type="text" class="form-control" id="pembuat" placeholder="Masukan Nama Belakang..." name="namabelakang"
                value="" required/>
        </div>

        <div class="form-group">
            <label for="usia">Usia</label>
            <input type="number" class="form-control" min="1" id="usia"
                placeholder="Masukan Usia anda..." name="usia" required />
        </div>

        <div class="form-group">
            <label for="noTelp">No Telp</label>
            <input type="number" class="form-control" min="1" id="noTelp"
                placeholder="Masukan No Telp anda..." name="noTelp" required />
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" name="deskripsi" rows="5" cols="40" type="text"
                placeholder="Masukan Motto hidup anda..." name="alamat" required></textarea>
        </div>

        <div class="form-group">
            <label for="example-product-photo">Foto</label>
            <p><small>gambar yang diupload harus landscape dan minimal berukuran 1900 x 1080</small></p>
            <input type="file" class="form-control" id="example-product-photo" aria-describedby="photoHelp"
                name="photo">
        </div>

        <button type="submit" class="btn btn-secondary w-100 bg-custom1 p-15">Submit</button>
    </form>
</div>
<br>
<?= $this->endSection(); ?>