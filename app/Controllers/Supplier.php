<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Barang_model;
use App\Models\Supplier_model;
use App\Models\Kategori_model;

class Supplier extends BaseController
{
    public function index()
    {
        $model = new Supplier_model();
        $modelBarang = new Barang_model();
        $data['barang'] = $modelBarang->getJoin();
        $data['supplier'] = $model->getSupplier();
        return view('supplier/index', $data);
    }

    public function create()
    {
        $model = new Barang_model();
        $modelSupplier = new Supplier_model();
        $modelKategori = new Kategori_model();

        $data['barang'] = $model->getJoin();
        $data['supplier'] = $modelSupplier->getSupplier();
        $data['kategori'] = $modelKategori->getKategori();
        return view('supplier/create', $data);
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $data = array(
            'nama_supplier' => $this->request->getvar('nama_supplier'),
            'alamat' => $this->request->getVar('alamat')
        );
        // dd($data);

        if ($validation->run($data, 'supplier') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('supplier/create'));
        } else {
            $model = new Supplier_model();
            $simpan = $model->insertSupplier($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Berhasil menambah data supplier');
                return redirect()->to(base_url('supplier'));

            }
        }
    }

    public function edit($id)
    {
        $model = new Supplier_model();

        $data['supplier'] = $model->getSupplier();
        $data['supplier'] = $model->getSupplier($id)->getRowArray();
        // dd($data);
        echo view('supplier/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id_supplier');
        $validation = \Config\Services::validation();

        $data = array(
            'nama_supplier' => $this->request->getPost('nama_supplier'),
            'alamat' => $this->request->getPost('alamat')
        );

        if ($validation->run($data, 'supplier') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('supplier/edit/' . $id));
        } else {
            $model = new Supplier_model();
            $ubah = $model->updateSupplier($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Berhasil Mengedit Data Supplier');
                return redirect()->to(base_url('supplier'));
            }
        }
    }

    public function delete($id)
    {
        $model = new Supplier_model();
        $hapus = $model->deleteSupplier($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Berhasil Mengahpus Data Supplier');
            return redirect()->to(base_url('supplier'));
        }
    }
}