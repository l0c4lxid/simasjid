<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function ViewPengaturan() {
        return $this->db->table('tbl_pengaturan')
        ->where('id', 1)
        ->get()->getRowArray();
    }
    public function UpdatePengaturan($data) {
        return $this->db->table('tbl_pengaturan')
        ->where('id', 1)
        ->update($data);
    }
    public function TampilRek() {
        return $this->db->table('tbl_donasi')
           ->where("id_rek", "id_rek")
           ->get()->getResultArray();
   }
}
