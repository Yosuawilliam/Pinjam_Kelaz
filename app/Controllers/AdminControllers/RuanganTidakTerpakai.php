<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;

use App\Models\Model_Ruangan;
use App\Models\Model_Jadwal;

class RuanganTidakTerpakai extends BaseController
{
    protected $Model_Ruangan;
    protected $Model_Jadwal;

    public function __construct()
    {
        $this->Model_Ruangan = new Model_Ruangan();
        $this->Model_Jadwal = new Model_Jadwal();
    }

    public function ruanganTidakTerpakai()
    {
        date_default_timezone_set('Asia/Jakarta');

        $dataArrRuangan = $this->Model_Ruangan->findAll();
        $dataArrJadwalRuangan = $this->Model_Jadwal->findAll();

        $detail_Ruangan = [];
        $ruangan = [];
        $jadwal_ruangan = [];

        if (!empty($dataArrRuangan)) {
            foreach ($dataArrRuangan as $data_Ruangan) {
                $ruangan[] = $data_Ruangan['id'];
            }
        }
        if (!empty($dataArrRuangan)) {
            foreach ($dataArrJadwalRuangan as $jadwal_Ruangan) {
                if ($jadwal_Ruangan['tanggal'] == date('Y-m-d')) {
                    $jadwal_ruangan[] = $jadwal_Ruangan['no_kelas'];
                }
            }

            $missing_numbers = array_diff($ruangan, $jadwal_ruangan);
            foreach ($dataArrRuangan as $data_Ruangan) {
                foreach ($missing_numbers as $missing_number) {
                    if ($data_Ruangan['id'] == $missing_number) {
                        $detail_Ruangan[] = [
                            'ruangan_id' => $data_Ruangan['id'],
                            'ruangan_no_ruangan' => $data_Ruangan['no_kelas'],
                            'ruangan_lokasi_kelas' => $data_Ruangan['lokasi_kelas'],
                            'ruangan_foto' => $data_Ruangan['foto_kelas'],
                        ];
                    }
                }
            }
        }
        if (!empty($dataArrRuangan) == empty($dataArrJadwalRuangan)) {
            foreach ($dataArrRuangan as $data_Ruangan) {
                $detail_Ruangan[] = [
                    'ruangan_id' => $data_Ruangan['id'],
                    'ruangan_no_ruangan' => $data_Ruangan['no_kelas'],
                    'ruangan_lokasi_kelas' => $data_Ruangan['lokasi_kelas'],
                    'ruangan_foto' => $data_Ruangan['foto_kelas'],
                ];
            }
        }

        if (empty($detail_Ruangan)) {
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

        // dd($dataAllRuangan);
        return view('adminPages/ruanganTidakTerpakai', $dataAllRuangan);
    }
}
