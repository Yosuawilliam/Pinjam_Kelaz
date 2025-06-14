<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $allowedFields = ['no_kelas', 'tanggal', 'mk_6_7', 'cd_6_7', 'mk_7_8', 'cd_7_8', 'mk_8_9', 'cd_8_9', 'mk_9_10', 'cd_9_10', 'mk_10_11', 'cd_10_11', 'mk_11_12', 'cd_11_12', 'mk_12_13', 'cd_12_13', 'mk_13_14', 'cd_13_14', 'mk_14_15', 'cd_14_15', 'mk_16_17',  'cd_16_17', 'mk_17_18', 'cd_17_18', 'mk_18_19', 'cd_18_19',];
}
