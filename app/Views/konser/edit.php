<?= $this->extend('layout/dashboard-layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Update product <?= $data['pembuat'] ?></h5>

            <form action="/konser/<?= $data['id'] ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="put" />
                <input type="hidden" name="oldphoto" value="<?=$data['photo']?>" />

                <div class="form-group">
                    <label for="example-konser-pembuat">Pembuat</label>
                    <input type="text" class="form-control" id="example-konser-pembuat" aria-describedby="emailHelp"
                        placeholder="Enter product name" required name="pembuat" value="<?= $data['pembuat'] ?>" disabled>
                </div>

                <div class="form-group">
                    <label for="example-konser-stok">Stock</label>
                    <input type="number" min="1" class="form-control" id="example-konser-stok"
                        aria-describedby="emailHelp" placeholder="Enter product stock" required name="stok"
                        value="<?= $data['stok'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-konser-harga">Price</label>
                    <input type="number" min="1" class="form-control" id="example-konser-harga"
                        aria-describedby="emailHelp" placeholder="Enter product price" required name="harga"
                        value="<?= $data['harga'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-konser-deskripsi">Deskripsi Design</label>
                    <input type="text" class="form-control" id="example-konser-deskripsi" aria-describedby="emailHelp"
                        placeholder="Enter product name" required name="deskripsi" value="<?= $data['deskripsi'] ?>" 
                        name="deskripsi">
                </div>

                <div class="form-group">
                    <label for="example-product-photo">Photo</label>
                    <input type="file" class="form-control" id="example-product-photo" aria-describedby="photoHelp"
                        placeholder="<?= $data['photo'] ?>" name="photo">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
<?= $this->endSection() ?>