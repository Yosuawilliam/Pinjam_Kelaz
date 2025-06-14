<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;

use App\Models\Model_Ruangan;
use App\Models\Model_Jadwal;

class SemuaRuangan extends BaseController
{
    protected $Model_Ruangan;

    public function __construct()
    {
        $this->Model_Ruangan = new Model_Ruangan();
    }

    public function semuaRuangan()
    {
        date_default_timezone_set('Asia/Jakarta');

        $dataArrRuangan = $this->Model_Ruangan->findAll();

        $dataAllRuangan = [];
        if (!empty($dataArrRuangan)) {
            foreach ($dataArrRuangan as $data_Ruangan) {
                $detail_Ruangan[] = [
                    'ruangan_id' => $data_Ruangan['id'],
                    'ruangan_no_ruangan' => $data_Ruangan['no_kelas'],
                    'ruangan_lokasi_kelas' => $data_Ruangan['lokasi_kelas'],
                    'ruangan_foto' => $data_Ruangan['foto_kelas'],
                ];
            }
        } else {
            $detail_Ruangan[] = [
                'ruangan_id' => null,
                'ruangan_no_ruangan' => null,
                'ruangan_lokasi_kelas' => null,
                'ruangan_foto' => null,
            ];
        }
        $dataAllRuangan = [
            'ruangan' => $detail_Ruangan
        ];
        return view('adminPages/semuaRuangan', $dataAllRuangan);
    }
}
