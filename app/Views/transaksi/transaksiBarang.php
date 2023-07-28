<?= view('_partials/header'); ?>
<?= view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Transaksi Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Transaksi Barang</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Daftar Transaksi Barang <a href="/transaksiBarang/cetak"><i
                                    class="fa-sharp fa-solid fa-print"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-dark table-hover table-bordered border-dark" width="100%"
                                    id="myTable">
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
<?= view('_partials/footer'); ?>