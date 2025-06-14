<?php

namespace App\Controllers;

use App\Models\Model_Ruangan;
use App\Models\Model_Jadwal;
use App\Models\Model_Pinjam_Ruangan;

class PinjamRuangan extends BaseController
{

    protected $Model_Ruangan;
    protected $Model_Jadwal;
    protected $Model_Pinjam_Ruangan;

    public function __construct()
    {
        $this->Model_Ruangan = new Model_Ruangan();
        $this->Model_Jadwal = new Model_Jadwal();
        $this->Model_Pinjam_Ruangan = new Model_Pinjam_Ruangan();
    }

    public function pinjamRuangan()
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
        return view('pinjamRuangan', $dataSesionRuangan);
    }

    public function simpanPinjamRuangan()
    {
        date_default_timezone_set('Asia/Jakarta');
        if ($this->request->getMethod() === 'post') {
            $data_ruangan_id = $this->request->getPost('ruangan_id');
            $data_user_id = $this->request->getPost('user_id');
            $data_nim_peminjam = $this->request->getPost('nim');
            $data_email_peminjam = $this->request->getPost('email');
            $data_keterangan_peminjam = $this->request->getPost('keterangan');
            // +1
            $data_filter1_6_7 = $this->request->getPost('filter1_6_7');
            $data_filter1_7_8 = $this->request->getPost('filter1_7_8');
            $data_filter1_8_9 = $this->request->getPost('filter1_8_9');
            $data_filter1_9_10 = $this->request->getPost('filter1_9_10');
            $data_filter1_10_11 = $this->request->getPost('filter1_10_11');
            $data_filter1_11_12 = $this->request->getPost('filter1_11_12');
            $data_filter1_12_13 = $this->request->getPost('filter1_12_13');
            $data_filter1_13_14 = $this->request->getPost('filter1_13_14');
            $data_filter1_14_15 = $this->request->getPost('filter1_14_15');
            $data_filter1_16_17 = $this->request->getPost('filter1_16_17');
            $data_filter1_17_18 = $this->request->getPost('filter1_17_18');
            $data_filter1_18_19 = $this->request->getPost('filter1_18_19');
            // +2
            $data_filter2_6_7 = $this->request->getPost('filter2_6_7');
            $data_filter2_7_8 = $this->request->getPost('filter2_7_8');
            $data_filter2_8_9 = $this->request->getPost('filter2_8_9');
            $data_filter2_9_10 = $this->request->getPost('filter2_9_10');
            $data_filter2_10_11 = $this->request->getPost('filter2_10_11');
            $data_filter2_11_12 = $this->request->getPost('filter2_11_12');
            $data_filter2_12_13 = $this->request->getPost('filter2_12_13');
            $data_filter2_13_14 = $this->request->getPost('filter2_13_14');
            $data_filter2_14_15 = $this->request->getPost('filter2_14_15');
            $data_filter2_16_17 = $this->request->getPost('filter2_16_17');
            $data_filter2_17_18 = $this->request->getPost('filter2_17_18');
            $data_filter2_18_19 = $this->request->getPost('filter2_18_19');
            // +3
            $data_filter3_6_7 = $this->request->getPost('filter3_6_7');
            $data_filter3_7_8 = $this->request->getPost('filter3_7_8');
            $data_filter3_8_9 = $this->request->getPost('filter3_8_9');
            $data_filter3_9_10 = $this->request->getPost('filter3_9_10');
            $data_filter3_10_11 = $this->request->getPost('filter3_10_11');
            $data_filter3_11_12 = $this->request->getPost('filter3_11_12');
            $data_filter3_12_13 = $this->request->getPost('filter3_12_13');
            $data_filter3_13_14 = $this->request->getPost('filter3_13_14');
            $data_filter3_14_15 = $this->request->getPost('filter3_14_15');
            $data_filter3_16_17 = $this->request->getPost('filter3_16_17');
            $data_filter3_17_18 = $this->request->getPost('filter3_17_18');
            $data_filter3_18_19 = $this->request->getPost('filter3_18_19');
            // +4
            $data_filter4_6_7 = $this->request->getPost('filter4_6_7');
            $data_filter4_7_8 = $this->request->getPost('filter4_7_8');
            $data_filter4_8_9 = $this->request->getPost('filter4_8_9');
            $data_filter4_9_10 = $this->request->getPost('filter4_9_10');
            $data_filter4_10_11 = $this->request->getPost('filter4_10_11');
            $data_filter4_11_12 = $this->request->getPost('filter4_11_12');
            $data_filter4_12_13 = $this->request->getPost('filter4_12_13');
            $data_filter4_13_14 = $this->request->getPost('filter4_13_14');
            $data_filter4_14_15 = $this->request->getPost('filter4_14_15');
            $data_filter4_16_17 = $this->request->getPost('filter4_16_17');
            $data_filter4_17_18 = $this->request->getPost('filter4_17_18');
            $data_filter4_18_19 = $this->request->getPost('filter4_18_19');
            // +5
            $data_filter5_6_7 = $this->request->getPost('filter5_6_7');
            $data_filter5_7_8 = $this->request->getPost('filter5_7_8');
            $data_filter5_8_9 = $this->request->getPost('filter5_8_9');
            $data_filter5_9_10 = $this->request->getPost('filter5_9_10');
            $data_filter5_10_11 = $this->request->getPost('filter5_10_11');
            $data_filter5_11_12 = $this->request->getPost('filter5_11_12');
            $data_filter5_12_13 = $this->request->getPost('filter5_12_13');
            $data_filter5_13_14 = $this->request->getPost('filter5_13_14');
            $data_filter5_14_15 = $this->request->getPost('filter5_14_15');
            $data_filter5_16_17 = $this->request->getPost('filter5_16_17');
            $data_filter5_17_18 = $this->request->getPost('filter5_17_18');
            $data_filter5_18_19 = $this->request->getPost('filter5_18_19');
            // +6
            $data_filter6_6_7 = $this->request->getPost('filter6_6_7');
            $data_filter6_7_8 = $this->request->getPost('filter6_7_8');
            $data_filter6_8_9 = $this->request->getPost('filter6_8_9');
            $data_filter6_9_10 = $this->request->getPost('filter6_9_10');
            $data_filter6_10_11 = $this->request->getPost('filter6_10_11');
            $data_filter6_11_12 = $this->request->getPost('filter6_11_12');
            $data_filter6_12_13 = $this->request->getPost('filter6_12_13');
            $data_filter6_13_14 = $this->request->getPost('filter6_13_14');
            $data_filter6_14_15 = $this->request->getPost('filter6_14_15');
            $data_filter6_16_17 = $this->request->getPost('filter6_16_17');
            $data_filter6_17_18 = $this->request->getPost('filter6_17_18');
            $data_filter6_18_19 = $this->request->getPost('filter6_18_19');
            // +7
            $data_filter7_6_7 = $this->request->getPost('filter7_6_7');
            $data_filter7_7_8 = $this->request->getPost('filter7_7_8');
            $data_filter7_8_9 = $this->request->getPost('filter7_8_9');
            $data_filter7_9_10 = $this->request->getPost('filter7_9_10');
            $data_filter7_10_11 = $this->request->getPost('filter7_10_11');
            $data_filter7_11_12 = $this->request->getPost('filter7_11_12');
            $data_filter7_12_13 = $this->request->getPost('filter7_12_13');
            $data_filter7_13_14 = $this->request->getPost('filter7_13_14');
            $data_filter7_14_15 = $this->request->getPost('filter7_14_15');
            $data_filter7_16_17 = $this->request->getPost('filter7_16_17');
            $data_filter7_17_18 = $this->request->getPost('filter7_17_18');
            $data_filter7_18_19 = $this->request->getPost('filter7_18_19');
            if ($data_filter1_6_7 != null || $data_filter1_7_8 != null || $data_filter1_8_9 != null || $data_filter1_9_10 != null || $data_filter1_10_11 != null || $data_filter1_11_12 != null || $data_filter1_12_13 != null || $data_filter1_13_14 != null || $data_filter1_14_15 != null || $data_filter1_16_17 != null || $data_filter1_17_18 != null || $data_filter1_18_19 != null) {
                if ($data_filter1_6_7 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+1 day')),
                        'mk_6_7' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter1_7_8 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+1 day')),
                        'mk_7_8' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter1_8_9 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+1 day')),
                        'mk_8_9' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter1_9_10 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+1 day')),
                        'mk_9_10' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter1_10_11 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+1 day')),
                        'mk_10_11' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter1_11_12 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+1 day')),
                        'mk_11_12' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter1_12_13 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+1 day')),
                        'mk_12_13' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter1_13_14 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+1 day')),
                        'mk_13_14' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter1_14_15 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+1 day')),
                        'mk_14_15' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter1_16_17 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+1 day')),
                        'mk_16_17' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter1_17_18 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+1 day')),
                        'mk_17_18' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter1_18_19 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+1 day')),
                        'mk_18_19' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
            } elseif ($data_filter2_6_7 != null || $data_filter2_7_8 != null || $data_filter2_8_9 != null || $data_filter2_9_10 != null || $data_filter2_10_11 != null || $data_filter2_11_12 != null || $data_filter2_12_13 != null || $data_filter2_13_14 != null || $data_filter2_14_15 != null || $data_filter2_16_17 != null || $data_filter2_17_18 != null || $data_filter2_18_19 != null) {
                if ($data_filter2_6_7 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+2 day')),
                        'mk_6_7' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter2_7_8 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+2 day')),
                        'mk_7_8' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter2_8_9 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+2 day')),
                        'mk_8_9' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter2_9_10 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+2 day')),
                        'mk_9_10' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter2_10_11 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+2 day')),
                        'mk_10_11' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter2_11_12 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+2 day')),
                        'mk_11_12' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter2_12_13 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+2 day')),
                        'mk_12_13' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter2_13_14 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+2 day')),
                        'mk_13_14' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter2_14_15 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+2 day')),
                        'mk_14_15' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter2_16_17 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+2 day')),
                        'mk_16_17' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter2_17_18 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+2 day')),
                        'mk_17_18' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter2_18_19 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+2 day')),
                        'mk_18_19' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
            } elseif ($data_filter3_6_7 != null || $data_filter3_7_8 != null || $data_filter3_8_9 != null || $data_filter3_9_10 != null || $data_filter3_10_11 != null || $data_filter3_11_12 != null || $data_filter3_12_13 != null || $data_filter3_13_14 != null || $data_filter3_14_15 != null || $data_filter3_16_17 != null || $data_filter3_17_18 != null || $data_filter3_18_19 != null) {
                if ($data_filter3_6_7 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+3 day')),
                        'mk_6_7' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter3_7_8 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+3 day')),
                        'mk_7_8' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter3_8_9 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+3 day')),
                        'mk_8_9' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter3_9_10 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+3 day')),
                        'mk_9_10' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter3_10_11 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+3 day')),
                        'mk_10_11' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter3_11_12 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+3 day')),
                        'mk_11_12' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter3_12_13 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+3 day')),
                        'mk_12_13' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter3_13_14 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+3 day')),
                        'mk_13_14' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter3_14_15 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+3 day')),
                        'mk_14_15' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter3_16_17 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+3 day')),
                        'mk_16_17' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter3_17_18 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+3 day')),
                        'mk_17_18' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter3_18_19 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+3 day')),
                        'mk_18_19' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
            } elseif ($data_filter4_6_7 != null || $data_filter4_7_8 != null || $data_filter4_8_9 != null || $data_filter4_9_10 != null || $data_filter4_10_11 != null || $data_filter4_11_12 != null || $data_filter4_12_13 != null || $data_filter4_13_14 != null || $data_filter4_14_15 != null || $data_filter4_16_17 != null || $data_filter4_17_18 != null || $data_filter4_18_19 != null) {
                if ($data_filter4_6_7 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+4 day')),
                        'mk_6_7' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter4_7_8 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+4 day')),
                        'mk_7_8' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter4_8_9 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+4 day')),
                        'mk_8_9' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter4_9_10 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+4 day')),
                        'mk_9_10' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter4_10_11 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+4 day')),
                        'mk_10_11' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter4_11_12 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+4 day')),
                        'mk_11_12' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter4_12_13 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+4 day')),
                        'mk_12_13' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter4_13_14 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+4 day')),
                        'mk_13_14' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter4_14_15 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+4 day')),
                        'mk_14_15' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter4_16_17 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+4 day')),
                        'mk_16_17' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter4_17_18 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+4 day')),
                        'mk_17_18' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter4_18_19 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+4 day')),
                        'mk_18_19' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
            } elseif ($data_filter5_6_7 != null || $data_filter5_7_8 != null || $data_filter5_8_9 != null || $data_filter5_9_10 != null || $data_filter5_10_11 != null || $data_filter5_11_12 != null || $data_filter5_12_13 != null || $data_filter5_13_14 != null || $data_filter5_14_15 != null || $data_filter5_16_17 != null || $data_filter5_17_18 != null || $data_filter5_18_19 != null) {
                if ($data_filter5_6_7 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+5 day')),
                        'mk_6_7' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter5_7_8 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+5 day')),
                        'mk_7_8' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter5_8_9 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+5 day')),
                        'mk_8_9' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter5_9_10 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+5 day')),
                        'mk_9_10' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter5_10_11 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+5 day')),
                        'mk_10_11' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter5_11_12 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+5 day')),
                        'mk_11_12' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter5_12_13 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+5 day')),
                        'mk_12_13' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter5_13_14 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+5 day')),
                        'mk_13_14' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter5_14_15 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+5 day')),
                        'mk_14_15' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter5_16_17 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+5 day')),
                        'mk_16_17' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter5_17_18 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+5 day')),
                        'mk_17_18' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter5_18_19 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+5 day')),
                        'mk_18_19' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
            } elseif ($data_filter6_6_7 != null || $data_filter6_7_8 != null || $data_filter6_8_9 != null || $data_filter6_9_10 != null || $data_filter6_10_11 != null || $data_filter6_11_12 != null || $data_filter6_12_13 != null || $data_filter6_13_14 != null || $data_filter6_14_15 != null || $data_filter6_16_17 != null || $data_filter6_17_18 != null || $data_filter6_18_19 != null) {
                if ($data_filter6_6_7 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+6 day')),
                        'mk_6_7' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter6_7_8 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+6 day')),
                        'mk_7_8' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter6_8_9 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+6 day')),
                        'mk_8_9' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter6_9_10 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+6 day')),
                        'mk_9_10' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter6_10_11 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+6 day')),
                        'mk_10_11' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter6_11_12 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+6 day')),
                        'mk_11_12' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter6_12_13 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+6 day')),
                        'mk_12_13' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter6_13_14 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+6 day')),
                        'mk_13_14' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter6_14_15 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+6 day')),
                        'mk_14_15' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter6_16_17 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+6 day')),
                        'mk_16_17' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter6_17_18 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+6 day')),
                        'mk_17_18' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter6_18_19 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+6 day')),
                        'mk_18_19' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
            } elseif ($data_filter7_6_7 != null || $data_filter7_7_8 != null || $data_filter7_8_9 != null || $data_filter7_9_10 != null || $data_filter7_10_11 != null || $data_filter7_11_12 != null || $data_filter7_12_13 != null || $data_filter7_13_14 != null || $data_filter7_14_15 != null || $data_filter7_16_17 != null || $data_filter7_17_18 != null || $data_filter7_18_19 != null) {
                if ($data_filter7_6_7 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+7 day')),
                        'mk_6_7' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter7_7_8 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+7 day')),
                        'mk_7_8' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter7_8_9 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+7 day')),
                        'mk_8_9' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter7_9_10 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+7 day')),
                        'mk_9_10' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter7_10_11 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+7 day')),
                        'mk_10_11' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter7_11_12 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+7 day')),
                        'mk_11_12' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter7_12_13 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+7 day')),
                        'mk_12_13' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter7_13_14 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+7 day')),
                        'mk_13_14' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter7_14_15 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+7 day')),
                        'mk_14_15' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter7_16_17 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+7 day')),
                        'mk_16_17' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter7_17_18 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+7 day')),
                        'mk_17_18' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
                if ($data_filter7_18_19 == "on") {
                    $data_Pinjam_Ruangan = [
                        'id_kelas' => $data_ruangan_id,
                        'user_id' => $data_user_id,
                        'nim' => $data_nim_peminjam,
                        'email' => $data_email_peminjam,
                        'tanggal' => date('Y-m-d', strtotime('+7 day')),
                        'mk_18_19' => $data_keterangan_peminjam,
                        'status' => "Menunggu Verifikasi"
                    ];
                    $this->Model_Pinjam_Ruangan->insert($data_Pinjam_Ruangan);
                }
            }


            // dd($data_nim_peminjam, $data_email_peminjam);
        }
        // return view('notifikasi');
        return redirect()->to(base_url('notifikasi'));
    }
}
