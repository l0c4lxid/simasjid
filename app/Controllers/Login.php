<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLogin;


class Login extends BaseController
{ /**
  * Class constructor.
  */
    public function __construct()
    {
        $this->ModelLogin = new ModelLogin();
    }
    public function index()
    {
        $data = [
            'judul' => 'Login',
            'validation' => \Config\Services::validation(),
        ];
        return view('v_login', $data);
    }
    public function CekLogin()
    {
        if (
            $this->validate([
                'email' => [
                    'label' => 'Email',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Masih Kosong',
                    ]
                ],
                'password' => [
                    'label' => 'Password',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Masih Kosong',
                    ]
                ]
            ])
        ) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $CekLogin = $this->ModelLogin->CekUser($email, $password);

            if ($CekLogin) {
                session()->set('email', $CekLogin['email']);
                session()->set('password', $CekLogin['password']);
                return redirect()->to(base_url('Admin'));
            } else {
                session()->setFlashdata('gagal', 'Email / Password Salah !');
                return redirect()->to(base_url('Login'));
            }
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Login'))->withInput('validation', \Config\Services::validation());
        }
    }

    public function LogOut()
    {
        session()->remove('email');
        session()->remove('password');
        session()->setFlashdata('pesan', 'Sudah Logout');
        return redirect()->to(base_url('Login'));

    }
}