<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;

use App\Models\Model_Ruangan;
use App\Models\Model_Jadwal;

class SemuaRuangan extends BaseController
{
    protected $Model_Ruangan;
    protected $Model_Jadwal;

    public function __construct()
    {
        $this->Model_Ruangan = new Model_Ruangan();
        $this->Model_Jadwal = new Model_Jadwal();
    }

    public function semuaRuangan()
    {
        date_default_timezone_set('Asia/Jakarta');

        $dataArrRuangan = $this->Model_Ruangan->findAll();
        $dataArrJadwalRuangan = $this->Model_Jadwal->findAll();

        $dataAllRuangan = [];
        $jadwalRuangan = [];
        if (!empty($dataArrRuangan)) {
            foreach ($dataArrRuangan as $data_Ruangan) {
                foreach ($dataArrJadwalRuangan as $jadwal_Ruangan) {
                    if ($jadwal_Ruangan['no_kelas'] == $data_Ruangan['id'] && $jadwal_Ruangan['tanggal'] == date('Y-m-d')) {
                        if (date('H:i') >= "06:30" && date('H:i') <= "07:30" && $jadwal_Ruangan['no_kelas'] == $data_Ruangan['id']) {
                        }
                        // $jadwalRuangan[] = [
                        //     'data_no_kelas' => $jadwal_Ruangan['no_kelas'],
                        //     'data_mk_6_7' => $jadwal_Ruangan['mk_6_7'],
                        //     'data_cd_6_7' => $jadwal_Ruangan['cd_6_7'],
                        //     'data_mk_7_8' => $jadwal_Ruangan['mk_7_8'],
                        //     'data_cd_7_8' => $jadwal_Ruangan['cd_7_8'],
                        //     'data_mk_8_9' => $jadwal_Ruangan['mk_8_9'],
                        //     'data_cd_8_9' => $jadwal_Ruangan['cd_8_9'],
                        //     'data_mk_9_10' => $jadwal_Ruangan['mk_9_10'],
                        //     'data_cd_9_10' => $jadwal_Ruangan['cd_9_10'],
                        //     'data_mk_10_11' => $jadwal_Ruangan['mk_10_11'],
                        //     'data_cd_10_11' => $jadwal_Ruangan['cd_10_11'],
                        //     'data_mk_11_12' => $jadwal_Ruangan['mk_11_12'],
                        //     'data_cd_11_12' => $jadwal_Ruangan['cd_11_12'],
                        //     'data_mk_12_13' => $jadwal_Ruangan['mk_12_13'],
                        //     'data_cd_12_13' => $jadwal_Ruangan['cd_12_13'],
                        //     'data_mk_13_14' => $jadwal_Ruangan['mk_13_14'],
                        //     'data_cd_13_14' => $jadwal_Ruangan['cd_13_14'],
                        //     'data_mk_14_15' => $jadwal_Ruangan['mk_14_15'],
                        //     'data_cd_14_15' => $jadwal_Ruangan['cd_14_15'],
                        //     'data_mk_16_17' => $jadwal_Ruangan['mk_16_17'],
                        //     'data_cd_16_17' => $jadwal_Ruangan['cd_16_17'],
                        //     'data_mk_17_18' => $jadwal_Ruangan['mk_17_18'],
                        //     'data_cd_17_18' => $jadwal_Ruangan['cd_17_18'],
                        //     'data_mk_18_19' => $jadwal_Ruangan['mk_18_19'],
                        //     'data_cd_18_19' => $jadwal_Ruangan['cd_18_19'],
                        // ];
                    }
                }
            }
        }
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
            'ruangan' => $detail_Ruangan,
            'jadwal_ruangan' => $jadwalRuangan
        ];


        // session()->set('dataSesion_All_Ruangan', );
        // dd($dataAllRuangan);
        return view('adminPages/semuaRuangan', $dataAllRuangan);
    }
}
