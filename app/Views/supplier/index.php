<?= view('_partials/header'); ?>
<?= view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Supplier</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Supplier</li>
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
                        <div class="card-header">Daftar Supplier <a href="<?= base_url('supplier/create'); ?>"
                                class="btn btn-primary float-right">Tambah</a></div>
                        <div class="card-body">
                            <?php
                            if (!empty(session()->getFlashdata('success'))) { ?>
                                <div class="alert alert-success">
                                    Berhasil Menambah Data Supplier
                                </div>
                            <?php } ?>
                            <?php if (!empty(session()->getFlashdata('info'))) { ?>
                                <div class="alert alert-info">
                                    Berhasil Mengedit Data Supplier
                                </div>
                            <?php } ?>
                            <?php if (!empty(session()->getFlashdata('warning'))) { ?>
                                <div class="alert alert-warning">
                                    Berhasil Menghapus Data Supplier
                                </div>
                            <?php } ?>
                            <div class="table-responsive">
                                <table class="table table-dark table-hover table-bordered border-dark" width="100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama Supplier</th>
                                            <th>Alamat</th>
                                            <th colspan="2" width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($supplier as $key => $row) { ?>
                                            <tr class="text-center table-active">
                                                <td>
                                                    <?= $key + 1; ?>
                                                </td>
                                                <td>
                                                    <?= $row['nama_supplier']; ?>
                                                </td>
                                                <td>
                                                    <?= $row['alamat']; ?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('supplier/edit/' . $row['id_supplier']); ?>"
                                                        class="btn btn-sm btn-success">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('supplier/delete/' . $row['id_supplier']); ?>"
                                                        class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus <?= $row['nama_supplier']; ?> ?')">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
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