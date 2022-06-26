<?= $this->extend('layout/dashboard-layout') ?>

<?= $this->section('content') ?>

<div class="w3-container w3-black w3-center">
  <h2 class="w3-wide w3-center">TIKET</h2>
  <div class="card-body ">
    <table class="w3-content w3-center table table-dark table-hover table-borderless">
      <thead>
        <tr>
          <td>No.</td>
          <td>Tiket</td>
          <td>Stok</td>
          <td>Harga</td>
          <td>Kategori</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>

        <?php $no = 0; ?>
        <?php foreach ($konsers as $item) : ?>
          <tr>
            <td><?= $no += 1; ?></td>
            <td><?= $item['tiket'] ?></td>
            <td><?= $item['stok'] ?></td>
            <td><?= $item['harga'] ?></td>
            <td><?= $item['deskripsi'] ?></td>
            <td>
              <div class="btn-group " role="group " aria-label="Basic example ">
                <form action="/konser/<?= $item['id'] ?>" method="POST" onsubmit="return confirm(`Are you sure?`)">
                  <a href="/konser/<?= $item['id'] ?>/edit" class="btn btn-secondary text-white "><i class='bx bx-pencil'></i></a>
                  <input type="hidden" name="_method" value="DELETE" />
                  <button class="btn btn-light text-dark" type="submit">
                    <i class='bx bx-trash'></i>
                  </button>
                </form>
              </div>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
    <a href="/konser/new" class="btn btn-dark"> <i class="fas fa-plus"></i> Add new product</a>
  </div>
</div>
<br>
<br>
<!-- The Band Section -->
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
  <h2 class="w3-wide">KONSER</h2>
  <p class="w3-opacity"><i>We love music</i></p>
  <p class="w3-justify">Kita akan melaksanakan tour konser se-Indonesia ditanggal awwal bulan terakhir. Maka tunggulah kehadiran kami di kota-kota kalian dan jangan lupa untuk beli tiket konser kami. Murah kok gak mahal-mahal amat. Jadi belilah tiket kami dan tunggu kami di kota-kota kalian</p>
</div>

<!-- End Page Content -->
</div>
<?= $this->endSection() ?>