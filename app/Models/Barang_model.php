<?php

namespace App\Models;

use CodeIgniter\Model;

class Barang_model extends Model
{
    protected $table = 'barang';

    public function getBarang($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_barang' => $id]);
        }
    }

    public function getJoin()
    {
        return $this->db->table('barang')
            ->join('supplier', 'supplier.id_supplier=barang.id_supplier')
            ->join('kategori', 'kategori.id_kategori=barang.id_kategori')
            ->get()->getResultArray();
    }


    public function insertBarang($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateBarang($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_barang' => $id]);
    }

    public function deleteBarang($id)
    {
        return $this->db->table($this->table)->delete(['id_barang' => $id]);
    }
}