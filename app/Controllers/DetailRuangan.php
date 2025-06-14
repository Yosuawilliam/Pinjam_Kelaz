<?php

namespace App\Controllers;

use App\Models\Model_Ruangan;
use App\Models\Model_Jadwal;

class DetailRuangan extends BaseController
{

    protected $Model_Ruangan;
    protected $Model_Jadwal;

    public function __construct()
    {
        $this->Model_Ruangan = new Model_Ruangan();
        $this->Model_Jadwal = new Model_Jadwal();
    }

    public function detailRuangan()
    {
        date_default_timezone_set('Asia/Jakarta');

        if ($this->request->getMethod() === 'post') {
            $data_ruangan_id = $this->request->getPost('ruangan_id');
            $dataArrRuangan = $this->Model_Ruangan->findAll();
            $dataArrJadwalRuangan = $this->Model_Jadwal->findAll();
            $dataSesionRuangan = [];

            foreach ($dataArrRuangan as $ruangan_data) {
                if ($ruangan_data['id'] == $data_ruangan_id) {
                    if (!empty($dataArrJadwalRuangan)) {
                        foreach ($dataArrJadwalRuangan as $jadwal_Ruangan) {
                            if ($jadwal_Ruangan['no_kelas'] == $data_ruangan_id && $jadwal_Ruangan['tanggal'] >= date('Y-m-d')) {
                                $jadwalRuangan[] = [
                                    'data_id' => $jadwal_Ruangan['id'],
                                    'data_no_kelas' => $jadwal_Ruangan['no_kelas'],
                                    'data_tanggal' => $jadwal_Ruangan['tanggal'],
                                    'data_mk_6_7' => $jadwal_Ruangan['mk_6_7'],
                                    'data_cd_6_7' => $jadwal_Ruangan['cd_6_7'],
                                    'data_mk_7_8' => $jadwal_Ruangan['mk_7_8'],
                                    'data_cd_7_8' => $jadwal_Ruangan['cd_7_8'],
                                    'data_mk_8_9' => $jadwal_Ruangan['mk_8_9'],
                                    'data_cd_8_9' => $jadwal_Ruangan['cd_8_9'],
                                    'data_mk_9_10' => $jadwal_Ruangan['mk_9_10'],
                                    'data_cd_9_10' => $jadwal_Ruangan['cd_9_10'],
                                    'data_mk_10_11' => $jadwal_Ruangan['mk_10_11'],
                                    'data_cd_10_11' => $jadwal_Ruangan['cd_10_11'],
                                    'data_mk_11_12' => $jadwal_Ruangan['mk_11_12'],
                                    'data_cd_11_12' => $jadwal_Ruangan['cd_11_12'],
                                    'data_mk_12_13' => $jadwal_Ruangan['mk_12_13'],
                                    'data_cd_12_13' => $jadwal_Ruangan['cd_12_13'],
                                    'data_mk_13_14' => $jadwal_Ruangan['mk_13_14'],
                                    'data_cd_13_14' => $jadwal_Ruangan['cd_13_14'],
                                    'data_mk_14_15' => $jadwal_Ruangan['mk_14_15'],
                                    'data_cd_14_15' => $jadwal_Ruangan['cd_14_15'],
                                    'data_mk_16_17' => $jadwal_Ruangan['mk_16_17'],
                                    'data_cd_16_17' => $jadwal_Ruangan['cd_16_17'],
                                    'data_mk_17_18' => $jadwal_Ruangan['mk_17_18'],
                                    'data_cd_17_18' => $jadwal_Ruangan['cd_17_18'],
                                    'data_mk_18_19' => $jadwal_Ruangan['mk_18_19'],
                                    'data_cd_18_19' => $jadwal_Ruangan['cd_18_19'],
                                ];
                            } else {
                                $jadwalRuangan[] = [
                                    'data_id' => null,
                                    'data_no_kelas' => null,
                                    'data_tanggal' => null,
                                    'data_mk_6_7' => null,
                                    'data_cd_6_7' => null,
                                    'data_mk_7_8' => null,
                                    'data_cd_7_8' => null,
                                    'data_mk_8_9' => null,
                                    'data_cd_8_9' => null,
                                    'data_mk_9_10' => null,
                                    'data_cd_9_10' => null,
                                    'data_mk_10_11' => null,
                                    'data_cd_10_11' => null,
                                    'data_mk_11_12' => null,
                                    'data_cd_11_12' => null,
                                    'data_mk_12_13' => null,
                                    'data_cd_12_13' => null,
                                    'data_mk_13_14' => null,
                                    'data_cd_13_14' => null,
                                    'data_mk_14_15' => null,
                                    'data_cd_14_15' => null,
                                    'data_mk_16_17' => null,
                                    'data_cd_16_17' => null,
                                    'data_mk_17_18' => null,
                                    'data_cd_17_18' => null,
                                    'data_mk_18_19' => null,
                                    'data_cd_18_19' => null,
                                ];
                            }
                        }
                    } else {
                        $jadwalRuangan[] = [
                            'data_id' => null,
                            'data_no_kelas' => null,
                            'data_tanggal' => null,
                            'data_mk_6_7' => null,
                            'data_cd_6_7' => null,
                            'data_mk_7_8' => null,
                            'data_cd_7_8' => null,
                            'data_mk_8_9' => null,
                            'data_cd_8_9' => null,
                            'data_mk_9_10' => null,
                            'data_cd_9_10' => null,
                            'data_mk_10_11' => null,
                            'data_cd_10_11' => null,
                            'data_mk_11_12' => null,
                            'data_cd_11_12' => null,
                            'data_mk_12_13' => null,
                            'data_cd_12_13' => null,
                            'data_mk_13_14' => null,
                            'data_cd_13_14' => null,
                            'data_mk_14_15' => null,
                            'data_cd_14_15' => null,
                            'data_mk_16_17' => null,
                            'data_cd_16_17' => null,
                            'data_mk_17_18' => null,
                            'data_cd_17_18' => null,
                            'data_mk_18_19' => null,
                            'data_cd_18_19' => null,
                        ];
                    }
                    $dataSesionRuangan = [
                        'ruangan_id' => $ruangan_data['id'],
                        'ruangan_no_ruangan' => $ruangan_data['no_kelas'],
                        'ruangan_lokasi_kelas' => $ruangan_data['lokasi_kelas'],
                        'ruangan_foto' => $ruangan_data['foto_kelas'],
                        'jadwal_ruangan' => $jadwalRuangan
                    ];
                }
            }
        }
        // dd($dataSesionRuangan);
        return view('detailRuangan', $dataSesionRuangan);
    }
}
