<?php

namespace App\Controllers;

use App\Models\ModelAdmin;
use App\Models\ModelKasMasjid;
use App\Models\ModelRekening;
use App\Models\ModelInfaq;
use App\Models\ModelPesan;
use App\Models\ModelLogin;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->ModelAdmin = new ModelAdmin;
        $this->ModelKasMasjid = new ModelKasMasjid;
        $this->ModelRekening = new ModelRekening;
        $this->ModelInfaq = new ModelInfaq;
        $this->ModelPesan = new ModelPesan;
        $this->ModelLogin = new ModelLogin;

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
            "jumlah_masuk" => $this->ModelInfaq->hitung_infaq_masuk(),
            "jumlah_keluar" => $this->ModelInfaq->hitung_infaq_keluar(),
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
    public function HapusDataPesan($id_pesan)
    {
        $data = [
            'id_pesan' => $id_pesan,
        ];
        $this->ModelPesan->HapusDataPesan($data);
        session()->setFlashdata('pesan', 'Berhasil Dihapus !');
        return redirect()->to(base_url('Admin/PesanMasuk'));
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
    public function Infaq()
    {
        $data = [
            'judul' => 'Infaq',
            'subjudul' => '',
            'menu' => 'infaq',
            'submenu' => '',
            'page' => 'infaq/v_infaq',
            'donasi' => $this->ModelInfaq->AllDataTable(),
            "jumlah_masuk" => $this->ModelInfaq->hitung_infaq_masuk(),
            "jumlah_keluar" => $this->ModelInfaq->hitung_infaq_keluar(),
        ];
        // var_dump($data);
        // die;
        return view('v_temp_admin', $data);
    }
    public function InfaqMasuk()
    {
        $data = [
            'judul' => 'Infaq Masuk Kas Masjid',
            'subjudul' => '',
            'menu' => 'infaq',
            'submenu' => 'infaq-masuk',
            'page' => 'infaq/masuk.php',
            'donasi' => $this->ModelInfaq->Masuk(),

        ];
        return view('v_temp_admin', $data);
    }
    public function InfaqKeluar()
    {
        $data = [
            'judul' => 'Infaq Keluar Kas Masjid',
            'subjudul' => '',
            'menu' => 'infaq',
            'submenu' => 'infaq-keluar',
            'page' => 'infaq/keluar.php',
            'donasi' => $this->ModelInfaq->Keluar(),
        ];
        return view('v_temp_admin', $data);
    }
    public function UpdateData($id_infaq)
    {
        $data = [
            'id_infaq' => $id_infaq,
            'status' => $this->request->getPost('status')
        ];
        $this->ModelInfaq->UpdateData($data);
        session()->setFlashdata('pesan', 'Berhasil Diupdate !');
        return redirect()->to(base_url('Admin/Infaq'));
    }
    public function Akun()
    {
        $db = \Config\Database::connect();
        $query = $db->table('user')->get()->getRowArray();
        if ($query) {
            $email = $query['email'];
            $password = $query['password'];
        }

        $data = [
            'judul' => 'Edit Akun',
            'subjudul' => '',
            'menu' => 'Akun',
            'submenu' => '',
            'page' => 'v_akun',
            'email' => $email,
            'password' => $password
        ];
        return view('v_temp_admin', $data);
    }
    public function GantiAkun()
    {
        // Mengambil data email dan password dari form input
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $modelLogin = new \App\Models\ModelLogin();
        $userData = [
            'email' => $email,
            'password' => $password
        ];

        // Menggunakan email sebagai kriteria pencarian
        $modelLogin->where('email', $email)->set($userData)->update();
        $modelLogin->where('password', $password)->set($userData)->update();
        session()->setFlashdata('pesan', 'Berhasil Diupdate !');
        // Redirect ke halaman admin setelah berhasil menyimpan
        return redirect()->to('/admin/akun');
    }

}