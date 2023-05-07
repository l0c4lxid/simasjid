<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHome extends Model
{
    public function Agenda()
    {
        return $this->db->table('tbl_agenda')
            ->where('month(tanggal)', date('m'))
            ->where('year(tanggal)', date('Y'))
            ->orderBy('tanggal', 'ASC')
            ->get()->getResultArray();
    }
    public function Infaq()
    {
        return $this->db->table('tbl_donasi')
            ->join('tbl_rekening', 'tbl_rekening.id_rek = tbl_donasi.id_rek', 'Left')
            ->where('month(tanggal)', date('m'))
            ->where('year(tanggal)', date('Y'))
            ->orderBy('tanggal', 'ASC')
            ->get()->getResultArray();
    }
}