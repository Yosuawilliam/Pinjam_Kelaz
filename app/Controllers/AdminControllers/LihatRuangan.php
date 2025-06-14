<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;

use App\Models\Model_Ruangan;
use App\Models\Model_Jadwal;

class LihatRuangan extends BaseController
{

    protected $Model_Ruangan;
    protected $Model_Jadwal;

    public function __construct()
    {
        $this->Model_Ruangan = new Model_Ruangan();
        $this->Model_Jadwal = new Model_Jadwal();
    }

    public function lihatRuangan()
    {

        date_default_timezone_set('Asia/Jakarta');

        if ($this->request->getMethod() === 'post') {
            $data_ruangan_id = $this->request->getPost('ruangan_id');
            $dataArrRuangan = $this->Model_Ruangan->findAll();
            $dataArrJadwalRuangan = $this->Model_Jadwal->findAll();
            $dataSesionRuangan = [];
            // $jadwalRuangan[] = [];

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
        // dd($jadwalRuangan);
        return view('adminPages/lihatRuangan', $dataSesionRuangan);
    }

    public function editRuangan()
    {
        if ($this->request->getMethod() === 'post') {
            $data_ruangan_id = $this->request->getPost('ruangan_id');
            $dataArrRuangan = $this->Model_Ruangan->findAll();
            $dataSesionRuangan = [];
            foreach ($dataArrRuangan as $ruangan_data) {
                if ($ruangan_data['id'] == $data_ruangan_id) {
                    $dataSesionRuangan = [
                        'ruangan_id' => $ruangan_data['id'],
                        'ruangan_no_ruangan' => $ruangan_data['no_kelas'],
                        'ruangan_lokasi_kelas' => $ruangan_data['lokasi_kelas'],
                        'ruangan_lantai_kelas' => $ruangan_data['lantai'],
                        'ruangan_foto' => $ruangan_data['foto_kelas'],
                    ];
                }
            }
            session()->set($dataSesionRuangan);
        }
        return view('adminPages/editRuangan');
    }

    public function saveEditRuangan()
    {
        if ($this->request->getMethod() === 'post') {
            $data_ruangan_id = $this->request->getPost('ruangan_id');
            $data_no_ruangan = $this->request->getPost('no_kelas');
            $data_lokasi_ruangan = $this->request->getPost('lokasi_kelas');
            $data_Lantai_Kelas = $this->request->getPost('lantai_kelas');
            $data_foto_kelas = $this->request->getFile('foto_kelas');

            $dataArrRuangan = $this->Model_Ruangan->findAll();
            $data = [];

            if ($data_foto_kelas == '') {
                foreach ($dataArrRuangan as $record) {
                    if ($record['id'] == $data_ruangan_id) {
                        $name_image = $record['foto_kelas'];
                    }
                }
            } else {
                $randomName = $data_foto_kelas->getRandomName();
                $data_foto_kelas->move('img', $randomName);
                $name_image = $data_foto_kelas->getName();
            }

            foreach ($dataArrRuangan as $search) {
                if ($search['id'] == $data_ruangan_id) {
                    $data = [
                        'no_kelas' => $data_no_ruangan,
                        'lokasi_kelas' => $data_lokasi_ruangan,
                        'lantai' => $data_Lantai_Kelas,
                        'foto_kelas' => $name_image,
                    ];
                }
            }
            $this->Model_Ruangan->update($data_ruangan_id, $data);
        }
        return redirect()->to(base_url('semuaRuangan'));
    }

    public function tambahJadwalRuangan()
    {
        if ($this->request->getMethod() === 'post') {
            $data_ruangan_id = $this->request->getPost('ruangan_id');
            $dataArrRuangan = $this->Model_Ruangan->findAll();
            $dataSesionRuangan = [];
            foreach ($dataArrRuangan as $ruangan_data) {
                if ($ruangan_data['id'] == $data_ruangan_id) {
                    $dataSesionRuangan = [
                        'ruangan_id' => $ruangan_data['id'],
                        'ruangan_no_ruangan' => $ruangan_data['no_kelas'],
                        'ruangan_lokasi_kelas' => $ruangan_data['lokasi_kelas'],
                        'ruangan_foto' => $ruangan_data['foto_kelas'],
                    ];
                }
            }
            session()->set($dataSesionRuangan);
        }
        return view('adminPages/tambahJadwalRuangan');
    }

    public function saveTambahJadwalRuangan()
    {
        if ($this->request->getMethod() === 'post') {
            $data_ruangan_id = $this->request->getPost('ruangan_id');
            $data_tanggal = $this->request->getPost('date');
            $data_mk_6_7 = $this->request->getPost('6_7_mataKuliah');
            $data_cd_6_7 = $this->request->getPost('6_7_dosen');
            $data_mk_7_8 = $this->request->getPost('7_8_mataKuliah');
            $data_cd_7_8 = $this->request->getPost('7_8_dosen');
            $data_mk_8_9 = $this->request->getPost('8_9_mataKuliah');
            $data_cd_8_9 = $this->request->getPost('8_9_dosen');
            $data_mk_9_10 = $this->request->getPost('9_10_mataKuliah');
            $data_cd_9_10 = $this->request->getPost('9_10_dosen');
            $data_mk_10_11 = $this->request->getPost('10_11_mataKuliah');
            $data_cd_10_11 = $this->request->getPost('10_11_dosen');
            $data_mk_11_12 = $this->request->getPost('11_12_mataKuliah');
            $data_cd_11_12 = $this->request->getPost('11_12_dosen');
            $data_mk_12_13 = $this->request->getPost('12_13_mataKuliah');
            $data_cd_12_13 = $this->request->getPost('12_13_dosen');
            $data_mk_13_14 = $this->request->getPost('13_14_mataKuliah');
            $data_cd_13_14 = $this->request->getPost('13_14_dosen');
            $data_mk_14_15 = $this->request->getPost('14_15_mataKuliah');
            $data_cd_14_15 = $this->request->getPost('14_15_dosen');
            $data_mk_16_17 = $this->request->getPost('16_17_mataKuliah');
            $data_cd_16_17 = $this->request->getPost('16_17_dosen');
            $data_mk_17_18 = $this->request->getPost('17_18_mataKuliah');
            $data_cd_17_18 = $this->request->getPost('17_18_dosen');
            $data_mk_18_19 = $this->request->getPost('18_19_mataKuliah');
            $data_cd_18_19 = $this->request->getPost('18_19_dosen');

            $dataJadwalRuangan = [];

            $dataJadwalRuangan = [
                'no_kelas' => $data_ruangan_id,
                'tanggal' => $data_tanggal,
                'mk_6_7' => $data_mk_6_7,
                'cd_6_7' => $data_cd_6_7,
                'mk_7_8' => $data_mk_7_8,
                'cd_7_8' => $data_cd_7_8,
                'mk_8_9' => $data_mk_8_9,
                'cd_8_9' => $data_cd_8_9,
                'mk_9_10' => $data_mk_9_10,
                'cd_9_10' => $data_cd_9_10,
                'mk_10_11' => $data_mk_10_11,
                'cd_10_11' => $data_cd_10_11,
                'mk_11_12' => $data_mk_11_12,
                'cd_11_12' => $data_cd_11_12,
                'mk_12_13' => $data_mk_12_13,
                'cd_12_13' => $data_cd_12_13,
                'mk_13_14' => $data_mk_13_14,
                'cd_13_14' => $data_cd_13_14,
                'mk_14_15' => $data_mk_14_15,
                'cd_14_15' => $data_cd_14_15,
                'mk_16_17' => $data_mk_16_17,
                'cd_16_17' => $data_cd_16_17,
                'mk_17_18' => $data_mk_17_18,
                'cd_17_18' => $data_cd_17_18,
                'mk_18_19' => $data_mk_18_19,
                'cd_18_19' => $data_cd_18_19,
            ];

            $this->Model_Jadwal->insert($dataJadwalRuangan);
        }
        return redirect()->to(base_url('semuaRuangan'));
    }
    public function editJadwalRuangan()
    {
        if ($this->request->getMethod() === 'post') {
            $data_jadwal_id = $this->request->getPost('jadwal_id');
            $dataArrJadwal = $this->Model_Jadwal->findAll();
            $dataArrRuangan = $this->Model_Ruangan->findAll();
            $dataSesionJadwal = [];

            foreach ($dataArrJadwal as $jadwal_data) {
                if ($jadwal_data['id'] == $data_jadwal_id) {
                    foreach ($dataArrRuangan as $ruangan_data) {
                        if ($ruangan_data['id'] == $jadwal_data['no_kelas']) {
                            $dataSesionJadwal = [
                                'data_jadwal_id' => $jadwal_data['id'],
                                'data_jadwal_no_kelas' => $ruangan_data['no_kelas'],
                                'data_jadwal_tanggal' => $jadwal_data['tanggal'],
                                'data_jadwal_mk_6_7' => $jadwal_data['mk_6_7'],
                                'data_jadwal_cd_6_7' => $jadwal_data['cd_6_7'],
                                'data_jadwal_mk_7_8' => $jadwal_data['mk_7_8'],
                                'data_jadwal_cd_7_8' => $jadwal_data['cd_7_8'],
                                'data_jadwal_mk_8_9' => $jadwal_data['mk_8_9'],
                                'data_jadwal_cd_8_9' => $jadwal_data['cd_8_9'],
                                'data_jadwal_mk_9_10' => $jadwal_data['mk_9_10'],
                                'data_jadwal_cd_9_10' => $jadwal_data['cd_9_10'],
                                'data_jadwal_mk_10_11' => $jadwal_data['mk_10_11'],
                                'data_jadwal_cd_10_11' => $jadwal_data['cd_10_11'],
                                'data_jadwal_mk_11_12' => $jadwal_data['mk_11_12'],
                                'data_jadwal_cd_11_12' => $jadwal_data['cd_11_12'],
                                'data_jadwal_mk_12_13' => $jadwal_data['mk_12_13'],
                                'data_jadwal_cd_12_13' => $jadwal_data['cd_12_13'],
                                'data_jadwal_mk_13_14' => $jadwal_data['mk_13_14'],
                                'data_jadwal_cd_13_14' => $jadwal_data['cd_13_14'],
                                'data_jadwal_mk_14_15' => $jadwal_data['mk_14_15'],
                                'data_jadwal_cd_14_15' => $jadwal_data['cd_14_15'],
                                'data_jadwal_mk_16_17' => $jadwal_data['mk_16_17'],
                                'data_jadwal_cd_16_17' => $jadwal_data['cd_16_17'],
                                'data_jadwal_mk_17_18' => $jadwal_data['mk_17_18'],
                                'data_jadwal_cd_17_18' => $jadwal_data['cd_17_18'],
                                'data_jadwal_mk_18_19' => $jadwal_data['mk_18_19'],
                                'data_jadwal_cd_18_19' => $jadwal_data['cd_18_19'],
                            ];
                        }
                    }
                }
            }
        }
        session()->set($dataSesionJadwal);

        return view('adminPages/editJadwalRuangan');
    }

    public function saveEditJadwalRuangan()
    {
        if ($this->request->getMethod() === 'post') {
            $data_ruangan_id = $this->request->getPost('jadwal_id');
            $data_tanggal = $this->request->getPost('date');
            $data_mk_6_7 = $this->request->getPost('6_7_mataKuliah');
            $data_cd_6_7 = $this->request->getPost('6_7_dosen');
            $data_mk_7_8 = $this->request->getPost('7_8_mataKuliah');
            $data_cd_7_8 = $this->request->getPost('7_8_dosen');
            $data_mk_8_9 = $this->request->getPost('8_9_mataKuliah');
            $data_cd_8_9 = $this->request->getPost('8_9_dosen');
            $data_mk_9_10 = $this->request->getPost('9_10_mataKuliah');
            $data_cd_9_10 = $this->request->getPost('9_10_dosen');
            $data_mk_10_11 = $this->request->getPost('10_11_mataKuliah');
            $data_cd_10_11 = $this->request->getPost('10_11_dosen');
            $data_mk_11_12 = $this->request->getPost('11_12_mataKuliah');
            $data_cd_11_12 = $this->request->getPost('11_12_dosen');
            $data_mk_12_13 = $this->request->getPost('12_13_mataKuliah');
            $data_cd_12_13 = $this->request->getPost('12_13_dosen');
            $data_mk_13_14 = $this->request->getPost('13_14_mataKuliah');
            $data_cd_13_14 = $this->request->getPost('13_14_dosen');
            $data_mk_14_15 = $this->request->getPost('14_15_mataKuliah');
            $data_cd_14_15 = $this->request->getPost('14_15_dosen');
            $data_mk_16_17 = $this->request->getPost('16_17_mataKuliah');
            $data_cd_16_17 = $this->request->getPost('16_17_dosen');
            $data_mk_17_18 = $this->request->getPost('17_18_mataKuliah');
            $data_cd_17_18 = $this->request->getPost('17_18_dosen');
            $data_mk_18_19 = $this->request->getPost('18_19_mataKuliah');
            $data_cd_18_19 = $this->request->getPost('18_19_dosen');

            $dataJadwalRuangan = [];

            $dataJadwalRuangan = [
                'tanggal' => $data_tanggal,
                'mk_6_7' => $data_mk_6_7,
                'cd_6_7' => $data_cd_6_7,
                'mk_7_8' => $data_mk_7_8,
                'cd_7_8' => $data_cd_7_8,
                'mk_8_9' => $data_mk_8_9,
                'cd_8_9' => $data_cd_8_9,
                'mk_9_10' => $data_mk_9_10,
                'cd_9_10' => $data_cd_9_10,
                'mk_10_11' => $data_mk_10_11,
                'cd_10_11' => $data_cd_10_11,
                'mk_11_12' => $data_mk_11_12,
                'cd_11_12' => $data_cd_11_12,
                'mk_12_13' => $data_mk_12_13,
                'cd_12_13' => $data_cd_12_13,
                'mk_13_14' => $data_mk_13_14,
                'cd_13_14' => $data_cd_13_14,
                'mk_14_15' => $data_mk_14_15,
                'cd_14_15' => $data_cd_14_15,
                'mk_16_17' => $data_mk_16_17,
                'cd_16_17' => $data_cd_16_17,
                'mk_17_18' => $data_mk_17_18,
                'cd_17_18' => $data_cd_17_18,
                'mk_18_19' => $data_mk_18_19,
                'cd_18_19' => $data_cd_18_19,
            ];

            $this->Model_Jadwal->update($data_ruangan_id, $dataJadwalRuangan);
        }
        return redirect()->to(base_url('semuaRuangan'));
    }
}
