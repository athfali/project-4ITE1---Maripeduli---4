<?= $this->extend('layout/dashboard-layout') ?>
<?= $this->section('content') ?>
<h2 class="w3-wide">Selamat datang di Mari Peduli <?= session('name') ?></h2>
<div class="w3-container w3-black w3-center">

    <table class="w3-content w3-center table table-light table-hover table-borderless">
        <?php $no = 0; ?>
        <?php foreach ($konsers as $item) : ?>
        <tr>
            <th>
                <H4>Penggalangan dana dari <?= $item['pembuat'] ?></H4>
            </th>
        </tr>
        <tr>
            <td>
                <div class="col-12 text-center ">
                    <img src="/photos/<?= $item['photo'] ?>" alt="" width=750 height=450>
                </div>
                <div class="col-12 text-left">
                    <div>
                        <h3>Jumlah Yang terkumpul Rp <?= $item['harga'] ?></h3>
                    </div>
                    <div>
                        <h6>Membutuhkan Rp <?= $item['stok'] ?></h6>
                    </div>
                    <div class="w3-center">
                        <div><?= $item['deskripsi'] ?></div>
                    </div>
                    <div>
                        <div class="w3-left">
                            <form action="/konser" method="post">
                                <input type="hidden" name="_method" value="put" />
                                <input type="hidden" name="oldphoto" />
                            </form>
                        </div>
                    </div>
                </div>
</div>
</tr>
<td>
    <div class="btn-group " role="group " aria-label="Basic example ">
        <form action="/konser/<?= $item['id'] ?>" method="POST" onsubmit="return confirm(`Are you sure?`)">
            <a href="/konser/<?= $item['id'] ?>/edit" class="btn btn-secondary text-white "><i
                    class='bx bx-pencil'></i></a>
            <a href="/konser/komentar" class="btn btn-secondary text-white "><i class='fa fa-commenting-o'></i></a>
            <input type="hidden" name="_method" value="DELETE" />
            <button class="btn btn-secondary text-dark" type="submit">
                <i class='bx bx-trash'></i>
            </button>
        </form>

    </div>
    <?php endforeach ?>

</td>
<br>

</table>
</div>
<div class="w3-container w3-center">
    <div class="w3-wide w3-center">
        <?= $pager->links('konsers', 'custom_pagination') ?>
    </div>
</div>
</div>
<br>



<div class="w3-container w3-content w3-center w3-padding-64 mt-12 mb-12" style="max-width:800px" id="band">
    <h2 class="w3-wide">Mari saling membantu</h2>
    <p class="w3-opacity"><i>Sebarkanlah senyuman kepada sesama</i></p>
    <p class="w3-justify">
        Mari membantu sesama manusia kita akan terus menyebarkan kebaikan kepada siapapun
        dan akan lebih berfokus kepada stunting gizi anak-anak se indonesia
        lebih mementingkan orang-orang kalangan tua yang mengidap penyakit jantung yang
        ada di seluruh Indonesia. Memberikan bantuan barupa sembako setiap satu minggu
        sekali kepada fakir miskin dan orang-orang yang lebih membutuhkan.
    </p>
</div>

<!-- End Page Content -->
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">

</div>
</div>
<?= $this->endSection() ?>