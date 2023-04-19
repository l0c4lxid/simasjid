<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelRekening;

class Rekening extends BaseController
{
    public function __construct()
    {
        $this->ModelRekening = new ModelRekening();
    }
    public function index(){
        $data = [
            'judul' => 'Rekening',
            'subjudul' => '',
            'menu' => 'rekening',
            'submenu' => '',
            'page' => 'v_rekening',
            'rek' => $this->ModelRekening->AllData(),
        ];
        return view('v_temp_admin', $data);
    }
    public function InsertData()
    {
        $data = [
            'nama_rek' => $this->request->getPost('nama_rek'),
            'no_rek' => $this->request->getPost('no_rek'),
            'atas_nama' => $this->request->getPost('atas_nama')
        ];
        $this->ModelRekening->InsertData($data);
        session()->setFlashdata('pesan', 'Berhasil Disimpan !');
        return redirect()->to(base_url('Rekening'));
    }
    public function UpdateData($id_rek)
    {
        $data = [
            'id_rek' => $id_rek,
            'nama_rek' => $this->request->getPost('nama_rek'),
            'no_rek' => $this->request->getPost('no_rek'),
            'atas_nama' => $this->request->getPost('atas_nama')
        ];
        $this->ModelRekening->UpdateData($data);
        session()->setFlashdata('pesan', 'Berhasil Diupdate !');
        return redirect()->to(base_url('Rekening'));
    }

    public function HapusData($id_rek)
    {
        $data = [
            'id_rek' => $id_rek,
        ];
        $this->ModelRekening->HapusData($data);
        session()->setFlashdata('pesan', 'Berhasil Dihapus !');
        return redirect()->to(base_url('Rekening'));
    }
}
