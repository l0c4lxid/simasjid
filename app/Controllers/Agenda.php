<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAgenda;
use CodeIgniter\I18n\Time;

class Agenda extends BaseController
{
    public function __construct()
    {
        $this->ModelAgenda = new ModelAgenda();
    }
    public function index()
    {
        $data = [
            'judul' => 'Agenda',
            'subjudul' => '',
            'menu' => 'agenda',
            'submenu' => '',
            'page' => 'v_agenda',
            'agenda' => $this->ModelAgenda->AllData(),
        ];
        return view('v_temp_admin', $data);
    }
    public function InsertData()
    {
        $currentTime = Time::now();
        $formattedTime = $currentTime->format('ymd-His');
        $data = [
            'id_agenda' => "AGD-" . $formattedTime,
            'nama_kegiatan' => $this->request->getPost('nama_kegiatan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'jam' => $this->request->getPost('jam')

        ];
        $this->ModelAgenda->InsertData($data);
        session()->setFlashdata('pesan', 'Berhasil Disimpan !');
        return redirect()->to(base_url('Agenda'));
    }
    public function UpdateData($id_agenda)
    {
        $data = [
            'id_agenda' => $id_agenda,
            'nama_kegiatan' => $this->request->getPost('nama_kegiatan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'jam' => $this->request->getPost('jam')
        ];
        $this->ModelAgenda->UpdateData($data);
        session()->setFlashdata('pesan', 'Berhasil Diupdate !');
        return redirect()->to(base_url('Agenda'));
    }
    public function HapusData($id_agenda)
    {
        $data = [
            'id_agenda' => $id_agenda,
        ];
        $this->ModelAgenda->HapusData($data);
        session()->setFlashdata('pesan', 'Berhasil Dihapus !');
        return redirect()->to(base_url('Agenda'));
    }
}