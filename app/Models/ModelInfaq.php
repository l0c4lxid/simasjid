<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelInfaq extends Model
{
     public function AllData()
     {
          return $this->db->table('tbl_infaq')
               ->get()->getResultArray();
     }
     public function AllDataTable()
     {
          return $this->db->table('tbl_infaq')
               ->join('tbl_rekening', 'tbl_rekening.id_rek = tbl_infaq.id_rek', 'Left')
               ->get()->getResultArray();
     }
     public function Masuk()
     {
          return $this->db->table('tbl_infaq')
               ->join('tbl_rekening', 'tbl_rekening.id_rek = tbl_infaq.id_rek', 'Left')
               ->where("status", "Masuk")
               ->get()->getResultArray();
     }
     public function Keluar()
     {
          return $this->db->table('tbl_infaq')
               ->join('tbl_rekening', 'tbl_rekening.id_rek = tbl_infaq.id_rek', 'Left')
               ->where("status", "Keluar")
               ->get()->getResultArray();
     }
     public function Pending()
     {
          return $this->db->table('tbl_infaq')
               ->where("status", "Pending")
               ->get()->getResultArray();
     }
     public function InsertData($data)
     {
          $this->db->table('tbl_infaq')->insert($data);
     }
     public function Updatedata($data)
     {
          $this->db->table('tbl_infaq')
               ->where('id_infaq', $data['id_infaq'])
               ->update($data);
     }

     public function HapusData($data)
     {
          $this->db->table('tbl_infaq')
               ->where('id_infaq', $data['id_infaq'])
               ->delete($data);
     }
     public function hitung_infaq_masuk()
     {
          return $this->db->table('tbl_infaq')
               ->selectSum('jumlah')
               ->where('status', 'Masuk')
               ->get()->getRowArray();
     }
     public function hitung_infaq_keluar()
     {
          return $this->db->table('tbl_infaq')
               ->selectSum('jumlah')
               ->where('status', 'Keluar')
               ->get()->getRowArray();
     }
}