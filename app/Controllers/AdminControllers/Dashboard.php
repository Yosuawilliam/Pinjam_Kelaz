<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;

use App\Models\Model_Ruangan;
use App\Models\Model_Jadwal;
use App\Models\Model_Pinjam_Ruangan;
use App\Models\Model_Users;

class Dashboard extends BaseController
{

    protected $Model_Ruangan;
    protected $Model_Jadwal;
    protected $Model_Pinjam_Ruangan;
    protected $Model_Users;

    public function __construct()
    {
        $this->Model_Ruangan = new Model_Ruangan();
        $this->Model_Jadwal = new Model_Jadwal();
        $this->Model_Pinjam_Ruangan = new Model_Pinjam_Ruangan();
        $this->Model_Users = new Model_Users();
    }

    public function dashboard()
    {
        date_default_timezone_set('Asia/Jakarta');

        $dataArrRuangan = $this->Model_Ruangan->findAll();
        $dataArrJadwalRuangan = $this->Model_Jadwal->findAll();
        $detail_Ruangan = [  [
            'ruangan_id' => null,
            'ruangan_no_ruangan' => null,
            'ruangan_lokasi_kelas' => null,
            'ruangan_foto' => null,
            'jadwal_kelas' => null,
        ]];

        $dataAllRuangan = [];
        if (!empty($dataArrRuangan) && !empty($dataArrJadwalRuangan)) {
            foreach ($dataArrRuangan as $data_Ruangan) {
                foreach ($dataArrJadwalRuangan as $jadwal_Ruangan) {
                    if ($data_Ruangan['id'] == $jadwal_Ruangan['no_kelas']) {
                        if ($jadwal_Ruangan['tanggal'] == date('Y-m-d')) {
                            if (date('H:i') >= "06:30" && date('H:i') <= "07:30" && $jadwal_Ruangan['no_kelas'] == $data_Ruangan['id']) {
                                $detail_Ruangan[] = [
                                    'ruangan_id' => $data_Ruangan['id'],
                                    'ruangan_no_ruangan' => $data_Ruangan['no_kelas'],
                                    'ruangan_lokasi_kelas' => $data_Ruangan['lokasi_kelas'],
                                    'ruangan_foto' => $data_Ruangan['foto_kelas'],
                                    'jadwal_kelas' => $jadwal_Ruangan['mk_6_7'],
                                ];
                            } elseif (date('H:i') >= "07:30" && date('H:i') <= "08:30" && $jadwal_Ruangan['no_kelas'] == $data_Ruangan['id']) {
                                $detail_Ruangan[] = [
                                    'ruangan_id' => $data_Ruangan['id'],
                                    'ruangan_no_ruangan' => $data_Ruangan['no_kelas'],
                                    'ruangan_lokasi_kelas' => $data_Ruangan['lokasi_kelas'],
                                    'ruangan_foto' => $data_Ruangan['foto_kelas'],
                                    'jadwal_kelas' => $jadwal_Ruangan['mk_7_8'],
                                ];
                            } elseif (date('H:i') >= "08:30" && date('H:i') <= "09:30" && $jadwal_Ruangan['no_kelas'] == $data_Ruangan['id']) {
                                $detail_Ruangan[] = [
                                    'ruangan_id' => $data_Ruangan['id'],
                                    'ruangan_no_ruangan' => $data_Ruangan['no_kelas'],
                                    'ruangan_lokasi_kelas' => $data_Ruangan['lokasi_kelas'],
                                    'ruangan_foto' => $data_Ruangan['foto_kelas'],
                                    'jadwal_kelas' => $jadwal_Ruangan['mk_8_9'],
                                ];
                            } elseif (date('H:i') >= "09:30" && date('H:i') <= "10:30" && $jadwal_Ruangan['no_kelas'] == $data_Ruangan['id']) {
                                $detail_Ruangan[] = [
                                    'ruangan_id' => $data_Ruangan['id'],
                                    'ruangan_no_ruangan' => $data_Ruangan['no_kelas'],
                                    'ruangan_lokasi_kelas' => $data_Ruangan['lokasi_kelas'],
                                    'ruangan_foto' => $data_Ruangan['foto_kelas'],
                                    'jadwal_kelas' => $jadwal_Ruangan['mk_9_10'],
                                ];
                            } elseif (date('H:i') >= "10:30" && date('H:i') <= "11:30" && $jadwal_Ruangan['no_kelas'] == $data_Ruangan['id']) {
                                $detail_Ruangan[] = [
                                    'ruangan_id' => $data_Ruangan['id'],
                                    'ruangan_no_ruangan' => $data_Ruangan['no_kelas'],
                                    'ruangan_lokasi_kelas' => $data_Ruangan['lokasi_kelas'],
                                    'ruangan_foto' => $data_Ruangan['foto_kelas'],
                                    'jadwal_kelas' => $jadwal_Ruangan['mk_10_11'],
                                ];
                            } elseif (date('H:i') >= "11:30" && date('H:i') <= "12:30" && $jadwal_Ruangan['no_kelas'] == $data_Ruangan['id']) {
                                $detail_Ruangan[] = [
                                    'ruangan_id' => $data_Ruangan['id'],
                                    'ruangan_no_ruangan' => $data_Ruangan['no_kelas'],
                                    'ruangan_lokasi_kelas' => $data_Ruangan['lokasi_kelas'],
                                    'ruangan_foto' => $data_Ruangan['foto_kelas'],
                                    'jadwal_kelas' => $jadwal_Ruangan['mk_11_12'],
                                ];
                            } elseif (date('H:i') >= "12:30" && date('H:i') <= "13:30" && $jadwal_Ruangan['no_kelas'] == $data_Ruangan['id']) {
                                $detail_Ruangan[] = [
                                    'ruangan_id' => $data_Ruangan['id'],
                                    'ruangan_no_ruangan' => $data_Ruangan['no_kelas'],
                                    'ruangan_lokasi_kelas' => $data_Ruangan['lokasi_kelas'],
                                    'ruangan_foto' => $data_Ruangan['foto_kelas'],
                                    'jadwal_kelas' => $jadwal_Ruangan['mk_12_13'],
                                ];
                            } elseif (date('H:i') >= "13:30" && date('H:i') <= "14:30" && $jadwal_Ruangan['no_kelas'] == $data_Ruangan['id']) {
                                $detail_Ruangan[] = [
                                    'ruangan_id' => $data_Ruangan['id'],
                                    'ruangan_no_ruangan' => $data_Ruangan['no_kelas'],
                                    'ruangan_lokasi_kelas' => $data_Ruangan['lokasi_kelas'],
                                    'ruangan_foto' => $data_Ruangan['foto_kelas'],
                                    'jadwal_kelas' => $jadwal_Ruangan['mk_13_14'],
                                ];
                            } elseif (date('H:i') >= "14:30" && date('H:i') <= "15:30" && $jadwal_Ruangan['no_kelas'] == $data_Ruangan['id']) {
                                $detail_Ruangan[] = [
                                    'ruangan_id' => $data_Ruangan['id'],
                                    'ruangan_no_ruangan' => $data_Ruangan['no_kelas'],
                                    'ruangan_lokasi_kelas' => $data_Ruangan['lokasi_kelas'],
                                    'ruangan_foto' => $data_Ruangan['foto_kelas'],
                                    'jadwal_kelas' => $jadwal_Ruangan['mk_14_15'],
                                ];
                            } elseif (date('H:i') >= "16:30" && date('H:i') <= "17:30" && $jadwal_Ruangan['no_kelas'] == $data_Ruangan['id']) {
                                $detail_Ruangan[] = [
                                    'ruangan_id' => $data_Ruangan['id'],
                                    'ruangan_no_ruangan' => $data_Ruangan['no_kelas'],
                                    'ruangan_lokasi_kelas' => $data_Ruangan['lokasi_kelas'],
                                    'ruangan_foto' => $data_Ruangan['foto_kelas'],
                                    'jadwal_kelas' => $jadwal_Ruangan['mk_16_17'],
                                ];
                            } elseif (date('H:i') >= "17:30" && date('H:i') <= "18:30" && $jadwal_Ruangan['no_kelas'] == $data_Ruangan['id']) {
                                $detail_Ruangan[] = [
                                    'ruangan_id' => $data_Ruangan['id'],
                                    'ruangan_no_ruangan' => $data_Ruangan['no_kelas'],
                                    'ruangan_lokasi_kelas' => $data_Ruangan['lokasi_kelas'],
                                    'ruangan_foto' => $data_Ruangan['foto_kelas'],
                                    'jadwal_kelas' => $jadwal_Ruangan['mk_17_18'],
                                ];
                            } elseif (date('H:i') >= "18:30" && date('H:i') <= "19:30" && $jadwal_Ruangan['no_kelas'] == $data_Ruangan['id']) {
                                $detail_Ruangan[] = [
                                    'ruangan_id' => $data_Ruangan['id'],
                                    'ruangan_no_ruangan' => $data_Ruangan['no_kelas'],
                                    'ruangan_lokasi_kelas' => $data_Ruangan['lokasi_kelas'],
                                    'ruangan_foto' => $data_Ruangan['foto_kelas'],
                                    'jadwal_kelas' => $jadwal_Ruangan['mk_18_19'],
                                ];
                            }
                        }
                        // break;
                    }
                    // break;
                    // else {
                    //     $detail_Ruangan[] = [
                    //         'ruangan_id' => null,
                    //         'ruangan_no_ruangan' => null,
                    //         'ruangan_lokasi_kelas' => null,
                    //         'ruangan_foto' => null,
                    //         'jadwal_kelas' => null,
                    //     ];
                    // }
                }
            }
        } else {
            $detail_Ruangan[] = [
                'ruangan_id' => null,
                'ruangan_no_ruangan' => null,
                'ruangan_lokasi_kelas' => null,
                'ruangan_foto' => null,
                'jadwal_kelas' => null,
            ];
        }

        $detail_Ruangan_Tidak_Terpakai = [];
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
                        $detail_Ruangan_Tidak_Terpakai[] = [
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
                $detail_Ruangan_Tidak_Terpakai[] = [
                    'ruangan_id' => $data_Ruangan['id'],
                    'ruangan_no_ruangan' => $data_Ruangan['no_kelas'],
                    'ruangan_lokasi_kelas' => $data_Ruangan['lokasi_kelas'],
                    'ruangan_foto' => $data_Ruangan['foto_kelas'],
                ];
            }
        }

        if (empty($detail_Ruangan_Tidak_Terpakai)) {
            $detail_Ruangan_Tidak_Terpakai[] = [
                'ruangan_id' => null,
                'ruangan_no_ruangan' => null,
                'ruangan_lokasi_kelas' => null,
                'ruangan_foto' => null,
            ];
        }

        $dataArrPinjam_Ruangan = $this->Model_Pinjam_Ruangan->findAll();
        $dataArrRuangan = $this->Model_Ruangan->findAll();
        $data_Notifikasi = [];
        if ($dataArrPinjam_Ruangan != null) {
            foreach ($dataArrPinjam_Ruangan as $dataPinjamRuangan) {
                foreach ($dataArrRuangan as $data_ruangan) {
                    if ($data_ruangan['id'] == $dataPinjamRuangan['id_kelas']) {
                        $data_Notifikasi[] = [
                            'data_id_notifikasi' => $dataPinjamRuangan['id'],
                            'data_no_kelas' => $data_ruangan['no_kelas'],
                            'data_tanggal_peminjaman' => $dataPinjamRuangan['tanggal'],
                            'data_status_peminjaman' => $dataPinjamRuangan['status']
                        ];
                    }
                }
            }
        }

        $dataArrUsers = $this->Model_Users->findAll();

        $data = [
            'semua_ruangan' => $dataArrRuangan,
            'ruang_terpakai' => $detail_Ruangan,
            'ruang_tidak_terpakai' => $detail_Ruangan_Tidak_Terpakai,
            'notifikasi' => $data_Notifikasi,
            'akun' => $dataArrUsers

        ];
        return view('adminPages/dashboard', $data);
    }
}
