<?php

namespace App\Controllers;

use App\Models\ModelAdmin;
use App\Models\ModelKasMasjid;
use App\Models\ModelRekening;
use App\Models\ModelDonasi;
use App\Models\ModelPesan;


class Admin extends BaseController
{
    public function __construct()
    {
        $this->ModelAdmin = new ModelAdmin;
        $this->ModelKasMasjid = new ModelKasMasjid;
        $this->ModelRekening = new ModelRekening;
        $this->ModelDonasi = new ModelDonasi;
        $this->ModelPesan = new ModelPesan;

    }
    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'subjudul' => '',
            'menu' => 'dashboard',
            'submenu' => '',
            'page' => 'v_dashboard',
            'kas' => $this->ModelKasMasjid->AllData(),
        ];
        return view('v_temp_admin', $data);
    }
    public function PesanMasuk()
    {
        $data = [
            'judul' => 'Pesan',
            'subjudul' => '',
            'menu' => 'Pesan Masuk',
            'submenu' => '',
            'page' => 'v_pesan',
            'pesan' => $this->ModelPesan->AllData(),
        ];
        return view('v_temp_admin', $data);
    }
    public function Pengaturan()
    {
        $url = 'https://api.myquran.com/v1/sholat/kota/semua';
        $kota = json_decode(file_get_contents($url), true);
        $data = [
            'judul' => 'Pengaturan',
            'subjudul' => '',
            'menu' => 'pengaturan',
            'submenu' => '',
            'page' => 'v_pengaturan',
            'pengaturan' => $this->ModelAdmin->ViewPengaturan(),
            'kota' => $kota,
        ];
        return view('v_temp_admin', $data);
    }
    public function UpdatePengaturan()
    {
        $data = [
            'id' => 1,
            'nama_masjid' => $this->request->getPost('nama_masjid'),
            'id_kota' => $this->request->getPost('id_kota'),
            'alamat' => $this->request->getPost('alamat'),
            'wa_masjid' => $this->request->getPost('wa_masjid'),
            'email' => $this->request->getPost('email')
        ];
        $this->ModelAdmin->UpdatePengaturan($data);
        session()->setFlashdata('pesan', 'Berhasil Diupdate !');
        return redirect()->to(base_url('Admin/Pengaturan'));
    }

    public function Donasi()
    {
        $data = [
            'judul' => 'Donasi',
            'subjudul' => '',
            'menu' => 'donasi',
            'submenu' => '',
            'page' => 'v_donasi',
            'donasi' => $this->ModelDonasi->AllDataTable(),
        ];
        return view('v_temp_admin', $data);
    }
    public function DonasiMasuk()
    {
        $data = [
            'judul' => 'Pemasukan Donasi Masuk Kas Masjid',
            'subjudul' => '',
            'menu' => 'donasi-masjid',
            'submenu' => 'donasi-masuk',
            'page' => 'donasi/masuk.php',
            'donasi' => $this->ModelDonasi->Masuk(),

        ];
        return view('v_temp_admin', $data);
    }
    public function DonasiKeluar()
    {
        $data = [
            'judul' => 'Pemasukan Donasi Keluar Kas Masjid',
            'subjudul' => '',
            'menu' => 'donasi-masjid',
            'submenu' => 'donasi-keluar',
            'page' => 'donasi/keluar.php',
            'donasi' => $this->ModelDonasi->Keluar(),
        ];
        return view('v_temp_admin', $data);
    }
    public function UpdateData($id_donasi)
    {
        $data = [
            'id_donasi' => $id_donasi,
            'status' => $this->request->getPost('status')
        ];
        $this->ModelDonasi->UpdateData($data);
        session()->setFlashdata('pesan', 'Berhasil Diupdate !');
        return redirect()->to(base_url('Admin/Donasi'));
    }

}