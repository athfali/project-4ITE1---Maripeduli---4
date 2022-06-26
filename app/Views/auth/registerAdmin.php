<?= $this->extend('layout/home-layout') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Daftarkan Akun Mari Peduli</h5>
            <div class="w3-container w3-content w3-padding-64">
                <div class="row align-items-center justify-content-center">
                    <div class="col-6 text-left bg-custom3 h-100">
                        <h4 class="w3-wide w3-center">REGISTRASI AKUN ADMIN</h4>

                        <form action="/registerAdmin" method="POST">
                            <div class="form-group">
                                <label for="example-password">
                                    <h4>Nama</h4>
                                </label>
                                <input type="text" class="form-control" id="example-email" aria-describedby="emailHelp"
                                    id="text" placeholder="Masukan Nama Anda..." name="nama">
                            </div>

                            <div class="form-group">
                                <label for="example-password">
                                    <h4>Email</h4>
                                </label>
                                <input type="email" class="form-control" id="example-email" aria-describedby="emailHelp"
                                    id="text" placeholder="Masukan Email Anda..." name="email">
                            </div>

                            <div class="mb-3">
                                <label for="example-password">
                                    <h4>Password</h4>
                                </label>
                                <input type="password" class="form-control" id="example-password-confirmation"
                                    aria-describedby="emailHelp" placeholder="Masukan Password Anda..." name="password">
                            </div>

                            <div class="mb-3">
                                <label for="example-password">
                                    <h4>Konfirmasi Password</h4>
                                </label>
                                <input type="password" class="form-control" id="example-password"
                                    aria-describedby="emailHelp" placeholder="Konfirmasi Password Anda..." name="password_confirmation">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-secondary w-100 bg-custom1 p-2 mb-2">
                                    <h4>Daftarkan</h4>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>