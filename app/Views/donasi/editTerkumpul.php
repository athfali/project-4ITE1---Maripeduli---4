<?= $this->extend('layout/admin-layout') ?>
<?= $this->section('content') ?>

<section class="signup-section" id="signup">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="fas fa-hand-holding-usd fa-2x mb-2 text-black"></i>
                <h2 class="text-black mb-5">Silahkan edit data Donasi Terkumpul</h2>
                <h5 class="text-black form-label d-flex">Update Donasi : <?= $data['nama'] ?></h5>

                <form action="/donasi/<?= $data['id'] ?>/updateTerkumpul" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put" />
                    <input type="hidden" name="oldphoto" value="<?=$data['photo']?>" />

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Pembuat</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="emailHelp"
                            placeholder="Masukan Nama Pembuat..." required name="nama" value="<?= $data['nama'] ?>">
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Jumlah</label>
                        <input type="text" class="form-control" id="jumlah" aria-describedby="emailHelp"
                            placeholder="Masukan Jumlah Donasi..." required name="jumlah"
                            value="<?= $data['jumlah'] ?>">
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">E-Money :</label>
                        <select class="form-control" id="e-money" name="e-money" value="<?= $data['e-money'] ?>"
                            type="text" placeholder="E-money" data-sb-validations="required" required>
                            <option value="gopay">GoPay</option>
                            <option value="ovo">OVO</option>
                            <option value="dana">DANA</option>
                            <option value="T-cash">T-Cash</option>
                            <option value="uangku">Uangku</option>
                            <option value="LinkAja">LinkAja</option>
                            <option value="ShopeePay">ShopeePay</option>
                        </select>
                    </div><br>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp"
                            placeholder="Masukan Deskripsi Anda..." required name="deskripsi"
                            value="<?= $data['deskripsi'] ?>" name="deskripsi">
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Id Donasi</label>
                        <input type="text" class="form-control" id="id_donasi" aria-describedby="emailHelp"
                            placeholder="Masukan Id Donasi..." required name="id_donasi"
                            value="<?= $data['id_donasi'] ?>">
                    </div>

                    <div class="form-group">
                        <label class="text-black form-label d-flex">Donasi untuk</label>
                        <input type="text" class="form-control" id="id_donasi" aria-describedby="emailHelp"
                            placeholder="Masukan Id Donasi..." required name="donasi_untuk"
                            value="<?= $data['donasi_untuk'] ?>">
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