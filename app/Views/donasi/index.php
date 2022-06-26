<?= $this->extend('layout/home-layout'); ?>
<?= $this->section('content'); ?>

<body>
    <main>
        <div class="text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <?php foreach ($donasis as $item) : ?>
                    <div class="card-header py-12">
                        <h2 class="my-0 fw-normal">Galang Dana Dari <?= $item['nama_pembuat'] ?></h2>
                    </div>
                    <div class="card-body">
                        <img src="/photos/<?= $item['photo'] ?>" width=700 height=450>
                        <br><br>
                        <div class="d-flex">
                            <h2>Target Donasi <?= $item['membutuhkan'] ?></h2><br>
                        </div>
                        <div class="d-flex">
                            <p>Jumlah Terkumpul Rp<?= $item['terkumpul'] ?></p>
                        </div>
                        <div class="d-flex">
                            <p>Deskripsi : <?= $item['deskripsi'] ?></p>
                        </div>
                    </div>
                    <div class="center">
                        <div class="btn-group " role="group " aria-label="Basic example ">
                            <a href="/home" class="btn btn-secondary" style="height: 35px;"><i
                                    class="fas fa-coins">Donasi</i></a>
                            </form>
                        </div>
                    </div>
                </div>
                </td>
                </ul>
            </div>
        </div>
        <?php endforeach ?>
        </div>
        </div>
        <div class="col-12">
            <?= $pager->links('donasis', 'custom_pagination') ?>
        </div>
    </main>
    </div>
</body>

</html>

<?= $this->endSection(); ?>