<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAgenda extends Model
{
     public function AllData()
     {
          return $this->db->table('tbl_agenda')
               ->get()->getResultArray();
     }
     public function InsertData($data)
     {
          $this->db->table('tbl_agenda')->insert($data);
     }
     public function Updatedata($data)
     {
          $this->db->table('tbl_agenda')
               ->where('id_agenda', $data['id_agenda'])
               ->update($data);
     }

     public function HapusData($data)
     {
          $this->db->table('tbl_agenda')
               ->where('id_agenda', $data['id_agenda'])
               ->delete($data);
     }
}