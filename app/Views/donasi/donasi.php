<?= $this->extend('layout/dashboard-layout') ?>
<?= $this->section('content') ?>

<!-- Signup-->
<section class="signup-section" id="signup">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-8 mx-auto text-center" id="subs">
                <i class="far fa-paper-plane fa-2x mb-2 text-black"></i>
                <h2 class="text-black mb-5">Silahkan mengisi form donasi terlebih dahulu</h2>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form class="form-signup" action="/donasi/createTerkumpul" method="post" enctype="multipart/form-data">
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
                            <input class="form-control" name="jumlah" min="1" type="text" placeholder="Jumlah Dalam Bentuk Rupiah..."
                                data-sb-validations="required" required />
                        </div>
                    </div><br>

                    <div class="form-group">
                        <div class="col">
                            <label class="text-black form-label d-flex">E-Money:</label>
                            <select class="form-control" id="E-money" name="E-money" type="text" placeholder="E-money"
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
                            <label class="text-black form-label d-flex">Deskripsi:</label>
                            <input class="form-control" name="deskripsi" rows="5" cols="40" type="text"
                                placeholder="Deskripsi..." data-sb-validations="required" required>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <div class="col">
                            <label class="text-black form-label d-flex">Id Donasi </label>
                            <input class="form-control" name="id_donasi" type="text" min="1" placeholder="Donasi Untuk..."
                                data-sb-validations="required" required />
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
                            <label class="text-black form-label d-flex">Email:</label>
                            <input class="form-control" name="email" type="text" placeholder="Email..."
                                data-sb-validations="required" required />
                        </div>
                    </div><br>

                    <div class="form-group">
                        <div class="col">
                            <label for="text-black form-label d-flex">Bukti Donasi </label>
                            <input type="file" class="form-control" id="example-donasi-photo" data-sb-validations="required"
                                aria-describedby="photoHelp" name="photo">
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