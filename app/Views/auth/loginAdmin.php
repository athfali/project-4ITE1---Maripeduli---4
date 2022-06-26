<?= $this->extend('layout/dashboard-layout') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">

            <?php if(session()->getFlashData('success')) { ?>
            <div class="alert alert-success">
                <?= session()->get('success') ?>
            </div>
            <?php } ?>

            <?php if(session()->getFlashdata('errors')) { ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('errors') ?>
            </div>
            <?php } ?>

            <form action="/loginAdmin" method="post">

                <main class="w3">
                <h5 class="mb-4">Login Admin Akun Mari Peduli</h5>
                    <div class="w3-container w3-content w3-padding-64">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-6 text-left bg-custom3 h-100">
                                <h4 class="w3-wide w3-center">LOGIN AKUN ADMIN MARI PEDULI</h4><br><br>
                                <form action="controller/auth.php?action=loginAdmin" method="POST">
                                    <div class="mb-3">
                                        <label for="example-email" class="form-label text-black">
                                            <h4>Email</h4>
                                        </label>
                                        <input type="email" class="form-control" id="example-email"
                                            aria-describedby="emailHelp" id="text" placeholder="Enter email"
                                            name="email" value="<?= old('email') ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-password">
                                            <h4>Password</h4>
                                        </label>
                                        <input type="password" class="form-control" id="example-password"
                                            aria-describedby="emailHelp" placeholder="Enter password" name="password">
                                    </div>

                                    <br><br><br>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-secondary w-100 bg-custom1 p-2 mb-2">
                                            <h4>Login</h4>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>