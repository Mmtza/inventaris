<?= view('_partials/header'); ?>
<?= view('_partials/sidebar'); ?>
<script>
    function tampilFoto() {
        foto = document.querySelector('#foto');
        preview = document.querySelector('#preview');
        file = new FileReader();
        file.readAsDataURL(foto.files[0]);
        file.onload = function (e) {
            preview.src = e.target.result;
        }
    }
</script>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Data Kategori</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data Kategori</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?= base_url('kategori/store'); ?>" method="POST">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $errors = session()->getFlashdata('errors');
                                if (!empty($errors)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        Whoops! Ada kesalahan saat input data, yaitu :
                                        <ul>
                                            <?php foreach ($errors as $error): ?>
                                                <li>
                                                    <?= esc($error); ?>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                <?php } ?>

                                <input type="hidden" name="id_kategori" value="">
                                <div class="form-group">
                                    <label for="jenis">Jenis Kategori</label>
                                    <input type="text" class="form-control" name="jenis" id="jenis"
                                        placeholder="Masukkan Jenis Kategori">
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('supplier'); ?>" class="btn btn-outline-info">Back</a>
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= view('_partials/footer'); ?>