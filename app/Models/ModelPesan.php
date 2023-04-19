<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPesan extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_pesan')
            ->get()->getResultArray();
    }
    public function InsertDataPesan($data)
    {
        $this->db->table('tbl_pesan')->insert($data);
    }
}