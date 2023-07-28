<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiBarang_model extends Model
{
    protected $table = 'log_stok_barang';

    public function getTransaksiBarang($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_log_stok' => $id]);
        }
    }
}