<?= view('_partials/header'); ?>
<?= view('_partials/sidebar'); ?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Barang</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Barang</li>
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
            <div class="card-header">Daftar Barang <a href="<?= base_url('barang/create'); ?>"
                class="btn btn-primary float-right">Tambah</a></div>
            <div class="card-body">
              <?php
              if (!empty(session()->getFlashdata('success'))) { ?>
                <div class="alert alert-success">
                  Berhasil Menambah Data Barang
                </div>
              <?php } ?>
              <?php if (!empty(session()->getFlashdata('info'))) { ?>
                <div class="alert alert-info">
                  Berhasil Mengedit Data Barang
                </div>
              <?php } ?>
              <?php if (!empty(session()->getFlashdata('warning'))) { ?>
                <div class="alert alert-warning">
                  Berhasil Menghapus Data Barang
                </div>
              <?php } ?>
              <div class="table-responsive">
                <table class="table table-dark table-hover table-bordered border-dark" width="100%" id="myTable">
                  <thead>
                    <tr class="text-center">
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Jumlah</th>
                      <th>Harga</th>
                      <th>Nama Supplier</th>
                      <th>Jenis Kategori</th>
                      <th width="200px">Foto</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($barang as $key => $row) { ?>
                      <tr class="text-center table-active">
                        <td>
                          <?= $key + 1; ?>
                        </td>
                        <td>
                          <?= $row['nama_barang']; ?>
                        </td>
                        <td>
                          <?= $row['jumlah']; ?>
                        </td>
                        <td>
                          <?= $row['harga']; ?>
                        </td>
                        <td>
                          <?= $row['nama_supplier']; ?>
                        </td>
                        <td>
                          <?= $row['jenis']; ?>
                        </td>
                        <td>
                          <img src="/img/<?= $row['foto']; ?>" class="img-fluid rounded-start img-table" alt="...">
                        </td>
                        <td>
                          <a href="<?= base_url('barang/edit/' . $row['id_barang']); ?>" class="btn btn-sm btn-success">
                            <i class="fa fa-edit"></i>
                          </a>
                          <a href="<?= base_url('barang/delete/' . $row['id_barang']); ?>" class="btn btn-sm btn-danger"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus <?= $row['nama_barang']; ?> ?')">
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