<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDonasi extends Model
{
     public function AllData()
     {
          return $this->db->table('tbl_donasi')
               ->get()->getResultArray();
     }
     public function AllDataTable()
     {
          return $this->db->table('tbl_donasi')
               ->join('tbl_rekening', 'tbl_rekening.id_rek = tbl_donasi.id_rek', 'Left')
               ->get()->getResultArray();
     }
     public function Masuk()
     {
          return $this->db->table('tbl_donasi')
               ->join('tbl_rekening', 'tbl_rekening.id_rek = tbl_donasi.id_rek', 'Left')
               ->where("status", "Masuk")
               ->get()->getResultArray();
     }
     public function Keluar()
     {
          return $this->db->table('tbl_donasi')
               ->join('tbl_rekening', 'tbl_rekening.id_rek = tbl_donasi.id_rek', 'Left')
               ->where("status", "Keluar")
               ->get()->getResultArray();
     }
     public function Pending()
     {
          return $this->db->table('tbl_donasi')
               ->where("status", "Pending")
               ->get()->getResultArray();
     }
     public function InsertData($data)
     {
          $this->db->table('tbl_donasi')->insert($data);
     }
     public function Updatedata($data)
     {
          $this->db->table('tbl_donasi')
               ->where('id_donasi', $data['id_donasi'])
               ->update($data);
     }

     public function HapusData($data)
     {
          $this->db->table('tbl_donasi')
               ->where('id_donasi', $data['id_donasi'])
               ->delete($data);
     }
     public function hitung_donasi_masuk()
     {
          $this->db->table('tbl_donasi')
               ->selectSum('jumlah')
               ->where('status', 'Masuk')
               ->get()->getResultArray();
     }
     public function hitung_donasi_keluar()
     {
          $this->db->table('tbl_donasi')
               ->selectSum('jumlah')
               ->where('status', 'Keluar')
               ->get()->getRowArray();
     }
}