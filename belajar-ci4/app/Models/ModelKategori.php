<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKategori extends Model
{
    public function Alldata()
    {
        return $this->db->table('categories')
                ->Get()-> GetResultArray();
    }
}
