<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Barang_model;
use App\Models\Supplier_model;
use App\Models\Kategori_model;

class Barang extends BaseController
{
    public function index()
    {
        $model = new Barang_model();
        $data['barang'] = $model->getJoin();
        return view('barang/index', $data);
    }

    public function create()
    {

        $model = new Barang_model();
        $modelSupplier = new Supplier_model();
        $modelKategori = new Kategori_model();

        $data['barang'] = $model->getJoin();
        $data['supplier'] = $modelSupplier->getSupplier();
        $data['kategori'] = $modelKategori->getKategori();
        return view('barang/create', $data);
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        // Foto
        $fileFoto = $this->request->getFile('foto');
        $fileFoto->move('img');
        $namaFoto = $fileFoto->getName();
        $data = array(
            'id_barang' => $this->request->getPost('id_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jumlah' => $this->request->getPost('jumlah'),
            'harga' => $this->request->getPost('harga'),
            'id_supplier' => $this->request->getPost('id_supplier'),
            'id_kategori' => $this->request->getPost('id_kategori'),
            'foto' => $namaFoto
        );

        if ($validation->run($data, 'barang') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('barang/create'));
        } else {
            $model = new Barang_model();
            $simpan = $model->insertBarang($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created Barang successfully');
                return redirect()->to(base_url('barang'));
            }
        }
    }

    public function edit($id)
    {
        $model = new Barang_model();
        $modelSupplier = new Supplier_model();
        $modelKategori = new Kategori_model();

        $data['barang'] = $model->getJoin();
        $data['supplier'] = $modelSupplier->getSupplier();
        $data['kategori'] = $modelKategori->getKategori();
        $data['barang'] = $model->getBarang($id)->getRowArray();
        echo view('barang/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id_barang');

        // Foto
        $image = $this->request->getFile('foto');
        $namaFoto = $image->getName();
        if ($namaFoto != null) {

            $validate = [
                'nama_barang' => 'required',
                'jumlah' => 'required',
                'harga' => 'required',
                'id_supplier' => 'required',
                'id_kategori' => 'required',
                'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]
                |max_size[foto,10000000]',
            ];

            $data = [
                'id_barang' => $this->request->getPost('id_barang'),
                'nama_barang' => $this->request->getPost('nama_barang'),
                'jumlah' => $this->request->getPost('jumlah'),
                'harga' => $this->request->getPost('harga'),
                'id_supplier' => $this->request->getPost('id_supplier'),
                'id_kategori' => $this->request->getPost('id_kategori'),
                'foto' => $namaFoto
            ];
            if (!$this->validate($validate)) {
                session()->setFlashdata('inputs', $this->request->getPost());
                session()->setFlashdata('errors', $this->validator->getErrors());
                return redirect()->to(base_url('barang/edit/' . $id));
            } else {
                $model = new Barang_model();
                $image->move(ROOTPATH . 'public/img', $namaFoto);
                $ubah = $model->updateBarang($data, $id);
                if ($ubah) {
                    session()->setFlashdata('info', 'Updated Barang');
                    return redirect()->to(base_url('barang'));
                }
            }
        } else {

            $validate = [
                'nama_barang' => 'required',
                'jumlah' => 'required',
                'harga' => 'required',
                'id_supplier' => 'required',
                'id_kategori' => 'required',
            ];
            $data = [
                'id_barang' => $this->request->getPost('id_barang'),
                'nama_barang' => $this->request->getPost('nama_barang'),
                'jumlah' => $this->request->getPost('jumlah'),
                'harga' => $this->request->getPost('harga'),
                'id_supplier' => $this->request->getPost('id_supplier'),
                'id_kategori' => $this->request->getPost('id_kategori')
            ];
            if (!$this->validate($validate)) {
                session()->setFlashdata('inputs', $this->request->getPost());
                session()->setFlashdata('errors', $this->validator->getErrors());
                return redirect()->to(base_url('barang/edit/' . $id));
            } else {
                $model = new Barang_model();
                $ubah = $model->updateBarang($data, $id);
                if ($ubah) {
                    session()->setFlashdata('info', 'Updated Barang');
                    return redirect()->to(base_url('barang'));
                }
            }
        }
    }

    public function delete($id)
    {
        $model = new Barang_model();
        $namaFile = $model->find($id);
        unlink('img/' . $namaFile['foto']);
        $hapus = $model->deleteBarang($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Barang Berhasil Dihapus');
            return redirect()->to(base_url('barang'));
        }
    }
}