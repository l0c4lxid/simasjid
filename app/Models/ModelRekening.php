<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRekening extends Model
{
    public function AllData() {
        return $this->db->table('tbl_rekening')
        ->get()->getResultArray();
    }
    public function TampilRek() {
     return $this->db->table('tbl_rekening')
     ->where('id_rek',['id_rek'])
     ->get()->getResultArray();
 }
    public function InsertData($data)
    {
         $this->db->table('tbl_rekening')->insert($data);
    }
    public function Updatedata($data)
    {
         $this->db->table('tbl_rekening')
         ->where('id_rek',$data['id_rek'])
         ->update($data);
    }

    public function HapusData($data)
    {
         $this->db->table('tbl_rekening')
         ->where('id_rek',$data['id_rek'])
         ->delete($data);
    }
}
