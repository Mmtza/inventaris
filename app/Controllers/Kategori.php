<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Kategori_model;

class Kategori extends BaseController
{
    public function index()
    {
        $model = new Kategori_model();
        $data['kategori'] = $model->getKategori();
        return view('kategori/index', $data);
    }

    public function create()
    {
        $model = new Kategori_model();

        $data['kategori'] = $model->getKategori();
        return view('kategori/create', $data);
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $data = array(
            'jenis' => $this->request->getvar('jenis')
        );
        // dd($data);

        if ($validation->run($data, 'kategori') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('kategori/create'));
        } else {
            $model = new Kategori_model();
            $simpan = $model->insertKategori($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Berhasil menambah data kategori');
                return redirect()->to(base_url('kategori'));

            }
        }
    }

    public function edit($id)
    {
        $model = new Kategori_model();

        $data['kategori'] = $model->getKategori();
        $data['kategori'] = $model->getKategori($id)->getRowArray();
        // dd($data);
        echo view('kategori/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id_kategori');
        $validation = \Config\Services::validation();

        $data = array(
            'jenis' => $this->request->getPost('jenis')
        );

        if ($validation->run($data, 'kategori') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('kategori/edit/' . $id));
        } else {
            $model = new Kategori_model();
            $ubah = $model->updateKategori($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Berhasil Mengedit Data Kategori');
                return redirect()->to(base_url('kategori'));
            }
        }
    }

    public function delete($id)
    {
        $model = new Kategori_model();
        $hapus = $model->deleteKategori($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Berhasil Mengahpus Data Kategori');
            return redirect()->to(base_url('kategori'));
        }
    }
}