<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .border-table {
            font-family: Arial, Helvetica, sans-serif;
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            font-size: 12px;
        }

        .border-table th {
            border: 1 solid #000;
            font-weight: bold;
            background-color: #e1e1e1;
        }

        .border-table td {
            border: 1 solid #000;
        }
    </style>
</head>

<body>
    <center>
    <h3>Laporan Donasi MARIPEDULI</h3>
    </center>
    <table class="border-table">
        <thead>
            <tr>
                <td>No.</td>
                <td>Foto</td>
                <td>Nama Pembuat</td>
                <td>Membutuhkan</td>
                <td>Terkumpul</td>
                <td>Deskripsi</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            <?php foreach ($donasis as $item) : ?>
                <tr>
                    <td><?= $no += 1; ?></td>
                    <td><img src="/photos/<?= $item['photo'] ?>" alt="" width=250 height=150></td>
                    <td><?= $item['nama_pembuat'] ?></td>
                    <td><?= $item['membutuhkan'] ?></td>
                    <td><?= $item['terkumpul'] ?></td>
                    <td><?= $item['deskripsi'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>