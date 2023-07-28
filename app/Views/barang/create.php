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
                    <h1 class="m-0 text-dark">Tambah Data Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Barang</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?= base_url('barang/store'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                // if (!empty(inputs)) {
                                //     $inputs = session()->getFlashdata('inputs'); 
                                // } 
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

                                <input type="hidden" name="id_barang" value="">
                                <div class="form-group">
                                    <label for="nama_barang">Nama Barang</label>
                                    <input type="text" class="form-control" name="nama_barang" id="nama_barang"
                                        placeholder="Masukkan Nama Barang">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <input type="number" class="form-control" name="jumlah" id="jumlah"
                                        placeholder="Masukkan Jumlah Barang">
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" class="form-control" name="harga" id="harga"
                                        placeholder="Masukkan Harga Barang" min="50000" max="10000000"
                                        title="Contoh = 50000">
                                </div>
                                <div class="form-group">
                                    <label for="id_supplier">Supplier</label>
                                    <select name="id_supplier" id="id_supplier" class="form-control">
                                        <option value="">Pilih Supplier</option>

                                        <?php foreach ($supplier as $key => $row): ?>
                                            <option value="<?= $row['id_supplier']; ?>"><?= $row['nama_supplier']; ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_kategori">Kategori</label>
                                    <select name="id_kategori" id="id_kategori" class="form-control">
                                        <option value="">Pilih Kategori</option>

                                        <?php foreach ($kategori as $key => $row): ?>
                                            <option value="<?= $row['id_kategori']; ?>"><?= $row['jenis']; ?>
                                            </option>
                                        <?php endforeach ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                                    <div>
                                        <input type="file" class="form-control mb-2" id="foto" name="foto"
                                            onchange="tampilFoto()" placeholder="Masukkan Foto Anda">
                                    </div>
                                    <div>
                                        <img id="preview" class="img-thumbnail">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('barang'); ?>" class="btn btn-outline-info">Back</a>
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