<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProduk extends Model
{
    public function Alldata()
    {
        return $this->db->table('products')
                ->Get()-> GetResultArray();
    }
}
