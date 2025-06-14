<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Pinjam_Ruangan extends Model
{
    protected $table = 'pinjam_ruang';
    protected $allowedFields = ['id_kelas', 'user_id', 'nim', 'email', 'tanggal', 'mk_6_7', 'mk_7_8', 'mk_8_9', 'mk_9_10', 'mk_10_11', 'mk_11_12', 'mk_12_13', 'mk_13_14', 'mk_14_15', 'mk_16_17', 'mk_17_18', 'mk_18_19', 'status'];
}
