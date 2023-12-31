<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Supplier</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Supplier</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url('supplier/update'); ?>" method="post">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $errors = session()->getFlashdata('errors');
                                if (!empty($errors)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        Whoops! Ada kesalahan saat input data, yaitu:
                                        <ul>
                                            <?php foreach ($errors as $error): ?>
                                                <li>
                                                    <?= esc($error) ?>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                <?php } ?>
                                <input type="hidden" name="id_supplier" value="<?php echo $supplier['id_supplier']; ?>">
                                <div class="form-group">
                                    <label for="nama_supplier">Nama Supplier</label>
                                    <input type="text" class="form-control" value="<?= $supplier['nama_supplier']; ?>"
                                        name="nama_supplier" id="nama_supplier" placeholder="Masukkan Nama Supplier">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" value="<?= $supplier['alamat']; ?>"
                                        name="alamat" id="alamat" placeholder="Masukkan Alamat Supplier">
                                </div>

                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('supplier'); ?>" class="btn btn-outline-info">Back</a>
                                <button type="submit" class="btn btn-primary float-right">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?php echo view('_partials/footer'); ?>