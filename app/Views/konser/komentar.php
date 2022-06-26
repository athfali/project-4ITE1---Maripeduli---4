<?= $this->extend('layout/dashboard-layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Komentar Design <?= $data['pembuat'] ?></h5>

            <form action="/konser/<?= $data['id'] ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="put" />
                <input type="hidden" name="oldphoto" value="<?=$data['photo']?>" />

                <div class="form-group">
                    <input type="hidden" name="pembuat" />
                </div>

                <div class="form-group">
                <input type="hidden" name="stok"  />
                </div>

                <div class="form-group">
                <input type="hidden" name="harga" />
                </div>

                <div class="form-group">
                <input type="hidden" name="deskripsi" />
                </div>

                <div class="form-group">
                <input type="hidden" name="photo" />
                </div>

                <div class="form-group">
                    <label for="example-konser-komentar">Komentar</label>
                    <input type="text" class="form-control" id="example-konser-komentar" aria-describedby="emailHelp"
                        placeholder="Enter product name" required name="komentar" value="<?= $data['komentar'] ?>" 
                        name="komentar">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
<?= $this->endSection() ?>

