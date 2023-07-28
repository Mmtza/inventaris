<?php

namespace App\Models;

use CodeIgniter\Model;

class Supplier_model extends Model
{
    protected $table = 'supplier';

    public function getSupplier($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_supplier' => $id]);
        }
    }
    public function insertSupplier($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateSupplier($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_supplier' => $id]);
    }

    public function deleteSupplier($id)
    {
        return $this->db->table($this->table)->delete(['id_supplier' => $id]);
    }
}