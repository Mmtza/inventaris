<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Transaksi</title>
</head>

<body>
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h1>LAPORAN TRANSAKSI</h1>
                                <br>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-dark table-hover table-bordered border-dark text-center"
                                        width="100%" id="myTable">
                                        <thead>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah Sekarang</th>
                                                <th>Jumlah Sebelumnya</th>
                                                <th>Waktu Transaksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($transaksiBarang as $key => $row) { ?>
                                                <tr class="text-center table-active">
                                                    <td>
                                                        <?= $key + 1; ?>
                                                    </td>
                                                    <td>
                                                        <?= $row['nama_barang']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $row['jumlah_baru']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $row['jumlah_lama']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $row['waktu_perubahan']; ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>