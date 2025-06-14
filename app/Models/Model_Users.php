<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Users extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['nama_depan', 'nama_belakang', 'nim', 'email', 'password', 'status', 'foto'];
}
