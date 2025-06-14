<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Ruangan extends Model
{
    protected $table = 'ruangan';
    protected $allowedFields = ['no_kelas', 'lokasi_kelas', 'lantai', 'foto_kelas'];
}
