<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['email', 'password'];

    public function CekUser($email, $password)
    {
        return $this->db->table('user')
            ->where('email', $email)
            ->where('password', $password)
            ->get()->getRowArray();

    }
}