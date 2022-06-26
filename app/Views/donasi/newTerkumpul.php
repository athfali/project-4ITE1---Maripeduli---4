<?= $this->extend('layout/admin-layout') ?>
<?= $this->section('content') ?>

<section class="signup-section" id="signup">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="fas fa-hand-holding-usd fa-2x mb-2 text-black"></i>
                <h2 class="text-black mb-5">Silahkan mengisi form untuk berdonasi</h2>
                <form action="/donasi/createTerkumpul" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="col">
                            <label class="text-black form-label d-flex">Nama:</label>
                            <input class="form-control" name="nama" type="text" placeholder="Nama Anda..."
                                data-sb-validations="required" required />
                        </div>
                    </div><br>

                    <div class="form-group">
                        <div class="col">
                            <label class="text-black form-label d-flex">Jumlah:</label>
                            <input class="form-control" name="jumlah" type="text"
                                placeholder="Jumlah Dalam Bentuk Rupiah..." data-sb-validations="required" required />
                        </div>
                    </div><br>

                    <div class="form-group">
                        <div class="col">
                            <label class="text-black form-label d-flex">E-Money:</label>
                            <select class="form-control" name="e-money" type="text" placeholder="e-money"
                                data-sb-validations="required" required>
                                <option value="gopay">GoPay</option>
                                <option value="ovo">OVO</option>
                                <option value="dana">DANA</option>
                                <option value="T-cash">T-Cash</option>
                                <option value="uangku">Uangku</option>
                                <option value="LinkAja">LinkAja</option>
                                <option value="ShopeePay">ShopeePay</option>
                            </select>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <div class="col">
                            <label class="text-black form-label d-flex">Deskripsi</label>
                            <textarea type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp"
                                placeholder="Masukan Deskripsi..." required name="deskripsi"></textarea>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <div class="col">
                            <label class="text-black form-label d-flex">Donasi Untuk: </label>
                            <input class="form-control" name="donasi_untuk" type="text" placeholder="Donasi Untuk..."
                                data-sb-validations="required" required />
                        </div>
                    </div><br>

                    <div class="form-group">
                        <div class="col">
                            <label class="text-black form-label d-flex">ID Donasi</label>
                            <input type="text" class="form-control" id="id_donasi" aria-describedby="emailHelp"
                                placeholder="Masukan Id Donasi..." required name="id_donasi">
                        </div>
                    </div><br>

                    <div class="form-group">
                        <div class="col">
                            <label class="photo text-black form-label d-flex">Bukti Donasi </label>
                            <input type="file" class="form-control" id="example-donasi-photo"
                                data-sb-validations="required" aria-describedby="photoHelp" name="photo">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-secondary w-100 bg-custom1 p-2 mb-2">
                                <h4>Submit</h4>
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this ->endsection() ?>