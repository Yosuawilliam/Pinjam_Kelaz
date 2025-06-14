<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;

use App\Models\Model_Ruangan;
use App\Models\Model_Pinjam_Ruangan;
use App\Models\Model_Users;
use App\Models\Model_Jadwal;


class Notifikasi extends BaseController
{

    protected $Model_Ruangan;
    protected $Model_Pinjam_Ruangan;
    protected $Model_Users;
    protected $Model_Jadwal;

    public function __construct()
    {
        $this->Model_Ruangan = new Model_Ruangan();
        $this->Model_Pinjam_Ruangan = new Model_Pinjam_Ruangan();
        $this->Model_Users = new Model_Users();
        $this->Model_Jadwal = new Model_Jadwal();
    }

    public function notifikasi()
    {

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
        $dataAllNotifikasi = [
            'dataAllNotifikasi' => $data_Notifikasi
        ];
        return view('adminPages/notifikasi', $dataAllNotifikasi);
    }

    public function detailAdminNotifikasi()
    {
        $dataArrPinjam_Ruangan = $this->Model_Pinjam_Ruangan->findAll();
        $dataArrRuangan = $this->Model_Ruangan->findAll();
        $Model_Users = $this->Model_Users->findAll();
        $data_Notifikasi = [];
        if ($this->request->getMethod() === 'post') {
            $data_notifikasi_id = $this->request->getPost('notifikasi_id');
            // $data_ruangan_id = $this->request->getPost('ruangan_id');
            foreach ($dataArrPinjam_Ruangan as $dataPinjamRuangan) {
                if ($dataPinjamRuangan['id'] == $data_notifikasi_id) {
                    foreach ($dataArrRuangan as $data_ruangan) {
                        if ($data_ruangan['id'] == $dataPinjamRuangan['id_kelas']) {
                            foreach ($Model_Users as $data_user) {
                                if ($dataPinjamRuangan['user_id'] == $data_user['id']) {
                                    if ($dataPinjamRuangan['mk_6_7'] != "") {
                                        $data_Notifikasi = [
                                            'data_id_notifikasi' => $dataPinjamRuangan['id'],
                                            'data_id_ruangan' => $data_ruangan['id'],
                                            'data_no_kelas' => $data_ruangan['no_kelas'],
                                            'data_tanggal_peminjaman' => $dataPinjamRuangan['tanggal'],
                                            'data_status_peminjaman' => $dataPinjamRuangan['status'],
                                            'data_username' => $data_user['nama_depan'] . ' ' . $data_user['nama_belakang'],
                                            'data_nim' => $data_user['nim'],
                                            'data_email' => $data_user['email'],
                                            'data_jadwal' => "06:30 - 07:30 Am",
                                            'data_keterangan' => $dataPinjamRuangan['mk_6_7']
                                        ];
                                    } elseif ($dataPinjamRuangan['mk_7_8'] != "") {
                                        $data_Notifikasi = [
                                            'data_id_notifikasi' => $dataPinjamRuangan['id'],
                                            'data_id_ruangan' => $data_ruangan['id'],
                                            'data_no_kelas' => $data_ruangan['no_kelas'],
                                            'data_tanggal_peminjaman' => $dataPinjamRuangan['tanggal'],
                                            'data_status_peminjaman' => $dataPinjamRuangan['status'],
                                            'data_username' => $data_user['nama_depan'] . ' ' . $data_user['nama_belakang'],
                                            'data_nim' => $data_user['nim'],
                                            'data_email' => $data_user['email'],
                                            'data_jadwal' => "07:30 - 08:30 Am",
                                            'data_keterangan' => $dataPinjamRuangan['mk_7_8']
                                        ];
                                    } elseif ($dataPinjamRuangan['mk_8_9'] != "") {
                                        $data_Notifikasi = [
                                            'data_id_notifikasi' => $dataPinjamRuangan['id'],
                                            'data_id_ruangan' => $data_ruangan['id'],
                                            'data_no_kelas' => $data_ruangan['no_kelas'],
                                            'data_tanggal_peminjaman' => $dataPinjamRuangan['tanggal'],
                                            'data_status_peminjaman' => $dataPinjamRuangan['status'],
                                            'data_username' => $data_user['nama_depan'] . ' ' . $data_user['nama_belakang'],
                                            'data_nim' => $data_user['nim'],
                                            'data_email' => $data_user['email'],
                                            'data_jadwal' => "08:30 - 09:30 Am",
                                            'data_keterangan' => $dataPinjamRuangan['mk_8_9']
                                        ];
                                    } elseif ($dataPinjamRuangan['mk_9_10'] != "") {
                                        $data_Notifikasi = [
                                            'data_id_notifikasi' => $dataPinjamRuangan['id'],
                                            'data_id_ruangan' => $data_ruangan['id'],
                                            'data_no_kelas' => $data_ruangan['no_kelas'],
                                            'data_tanggal_peminjaman' => $dataPinjamRuangan['tanggal'],
                                            'data_status_peminjaman' => $dataPinjamRuangan['status'],
                                            'data_username' => $data_user['nama_depan'] . ' ' . $data_user['nama_belakang'],
                                            'data_nim' => $data_user['nim'],
                                            'data_email' => $data_user['email'],
                                            'data_jadwal' => "09:30 - 10:30 Am",
                                            'data_keterangan' => $dataPinjamRuangan['mk_9_10']
                                        ];
                                    } elseif ($dataPinjamRuangan['mk_10_11'] != "") {
                                        $data_Notifikasi = [
                                            'data_id_notifikasi' => $dataPinjamRuangan['id'],
                                            'data_id_ruangan' => $data_ruangan['id'],
                                            'data_no_kelas' => $data_ruangan['no_kelas'],
                                            'data_tanggal_peminjaman' => $dataPinjamRuangan['tanggal'],
                                            'data_status_peminjaman' => $dataPinjamRuangan['status'],
                                            'data_username' => $data_user['nama_depan'] . ' ' . $data_user['nama_belakang'],
                                            'data_nim' => $data_user['nim'],
                                            'data_email' => $data_user['email'],
                                            'data_jadwal' => "10:30 - 11:30 Am",
                                            'data_keterangan' => $dataPinjamRuangan['mk_10_11']
                                        ];
                                    } elseif ($dataPinjamRuangan['mk_11_12'] != "") {
                                        $data_Notifikasi = [
                                            'data_id_notifikasi' => $dataPinjamRuangan['id'],
                                            'data_id_ruangan' => $data_ruangan['id'],
                                            'data_no_kelas' => $data_ruangan['no_kelas'],
                                            'data_tanggal_peminjaman' => $dataPinjamRuangan['tanggal'],
                                            'data_status_peminjaman' => $dataPinjamRuangan['status'],
                                            'data_username' => $data_user['nama_depan'] . ' ' . $data_user['nama_belakang'],
                                            'data_nim' => $data_user['nim'],
                                            'data_email' => $data_user['email'],
                                            'data_jadwal' => "11:30 - 12:30 Am",
                                            'data_keterangan' => $dataPinjamRuangan['mk_11_12']
                                        ];
                                    } elseif ($dataPinjamRuangan['mk_12_13'] != "") {
                                        $data_Notifikasi = [
                                            'data_id_notifikasi' => $dataPinjamRuangan['id'],
                                            'data_id_ruangan' => $data_ruangan['id'],
                                            'data_no_kelas' => $data_ruangan['no_kelas'],
                                            'data_tanggal_peminjaman' => $dataPinjamRuangan['tanggal'],
                                            'data_status_peminjaman' => $dataPinjamRuangan['status'],
                                            'data_username' => $data_user['nama_depan'] . ' ' . $data_user['nama_belakang'],
                                            'data_nim' => $data_user['nim'],
                                            'data_email' => $data_user['email'],
                                            'data_jadwal' => "12:30 - 13:30 Am",
                                            'data_keterangan' => $dataPinjamRuangan['mk_12_13']
                                        ];
                                    } elseif ($dataPinjamRuangan['mk_13_14'] != "") {
                                        $data_Notifikasi = [
                                            'data_id_notifikasi' => $dataPinjamRuangan['id'],
                                            'data_id_ruangan' => $data_ruangan['id'],
                                            'data_no_kelas' => $data_ruangan['no_kelas'],
                                            'data_tanggal_peminjaman' => $dataPinjamRuangan['tanggal'],
                                            'data_status_peminjaman' => $dataPinjamRuangan['status'],
                                            'data_username' => $data_user['nama_depan'] . ' ' . $data_user['nama_belakang'],
                                            'data_nim' => $data_user['nim'],
                                            'data_email' => $data_user['email'],
                                            'data_jadwal' => "13:30 - 14:30 Am",
                                            'data_keterangan' => $dataPinjamRuangan['mk_13_14']
                                        ];
                                    } elseif ($dataPinjamRuangan['mk_14_15'] != "") {
                                        $data_Notifikasi = [
                                            'data_id_notifikasi' => $dataPinjamRuangan['id'],
                                            'data_id_ruangan' => $data_ruangan['id'],
                                            'data_no_kelas' => $data_ruangan['no_kelas'],
                                            'data_tanggal_peminjaman' => $dataPinjamRuangan['tanggal'],
                                            'data_status_peminjaman' => $dataPinjamRuangan['status'],
                                            'data_username' => $data_user['nama_depan'] . ' ' . $data_user['nama_belakang'],
                                            'data_nim' => $data_user['nim'],
                                            'data_email' => $data_user['email'],
                                            'data_jadwal' => "14:30 - 15:30 Am",
                                            'data_keterangan' => $dataPinjamRuangan['mk_14_15']
                                        ];
                                    } elseif ($dataPinjamRuangan['mk_16_17'] != "") {
                                        $data_Notifikasi = [
                                            'data_id_notifikasi' => $dataPinjamRuangan['id'],
                                            'data_id_ruangan' => $data_ruangan['id'],
                                            'data_no_kelas' => $data_ruangan['no_kelas'],
                                            'data_tanggal_peminjaman' => $dataPinjamRuangan['tanggal'],
                                            'data_status_peminjaman' => $dataPinjamRuangan['status'],
                                            'data_username' => $data_user['nama_depan'] . ' ' . $data_user['nama_belakang'],
                                            'data_nim' => $data_user['nim'],
                                            'data_email' => $data_user['email'],
                                            'data_jadwal' => "16:30 - 17:30 Am",
                                            'data_keterangan' => $dataPinjamRuangan['mk_16_17']
                                        ];
                                    } elseif ($dataPinjamRuangan['mk_17_18'] != "") {
                                        $data_Notifikasi = [
                                            'data_id_notifikasi' => $dataPinjamRuangan['id'],
                                            'data_id_ruangan' => $data_ruangan['id'],
                                            'data_no_kelas' => $data_ruangan['no_kelas'],
                                            'data_tanggal_peminjaman' => $dataPinjamRuangan['tanggal'],
                                            'data_status_peminjaman' => $dataPinjamRuangan['status'],
                                            'data_username' => $data_user['nama_depan'] . ' ' . $data_user['nama_belakang'],
                                            'data_nim' => $data_user['nim'],
                                            'data_email' => $data_user['email'],
                                            'data_jadwal' => "17:30 - 18:30 Am",
                                            'data_keterangan' => $dataPinjamRuangan['mk_17_18']
                                        ];
                                    } elseif ($dataPinjamRuangan['mk_18_19'] != "") {
                                        $data_Notifikasi = [
                                            'data_id_notifikasi' => $dataPinjamRuangan['id'],
                                            'data_id_ruangan' => $data_ruangan['id'],
                                            'data_no_kelas' => $data_ruangan['no_kelas'],
                                            'data_tanggal_peminjaman' => $dataPinjamRuangan['tanggal'],
                                            'data_status_peminjaman' => $dataPinjamRuangan['status'],
                                            'data_username' => $data_user['nama_depan'] . ' ' . $data_user['nama_belakang'],
                                            'data_nim' => $data_user['nim'],
                                            'data_email' => $data_user['email'],
                                            'data_jadwal' => "18:30 - 19:30 Am",
                                            'data_keterangan' => $dataPinjamRuangan['mk_18_19']
                                        ];
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        return view('adminPages/detailNotifikasi', $data_Notifikasi);
    }
    public function rejectedNotifikasi()
    {
        $dataArrPinjam_Ruangan = $this->Model_Pinjam_Ruangan->findAll();
        if ($this->request->getMethod() === 'post') {
            $data_notifikasi_id = $this->request->getPost('notifikasi_id');
            foreach ($dataArrPinjam_Ruangan as $search) {
                if ($search['id'] == $data_notifikasi_id) {
                    $data = [
                        'status' => "Ditolak",
                    ];
                }
            }
            $this->Model_Pinjam_Ruangan->update($data_notifikasi_id, $data);
        }
        return redirect()->to(base_url('allnotifikasi'));
    }
    public function verification()
    {
        $dataArrPinjam_Ruangan = $this->Model_Pinjam_Ruangan->findAll();
        $dataArrRuangan = $this->Model_Ruangan->findAll();
        $dataArrJadwal = $this->Model_Jadwal->findAll();
        if ($this->request->getMethod() === 'post') {
            $data_notifikasi_id = $this->request->getPost('notifikasi_id');
            foreach ($dataArrPinjam_Ruangan as $search) {
                if ($search['id'] == $data_notifikasi_id) {
                    foreach ($dataArrRuangan as $data_ruangan) {
                        if ($data_ruangan['id'] == $search['id_kelas']) {
                            foreach ($dataArrJadwal as $jadwal) {
                                if ($jadwal['tanggal'] == $search['tanggal'] && $jadwal['no_kelas'] == $search['id_kelas']) {
                                    if ($search['mk_6_7'] != "") {
                                        $arrNotifikasi = [
                                            'mk_6_7' => $search['mk_6_7'],
                                            'cd_6_7' => $search['nim']
                                        ];
                                        $data = [
                                            'status' => "Terverifikasi"
                                        ];
                                        $this->Model_Jadwal->update($jadwal['id'], $arrNotifikasi);
                                        $this->Model_Pinjam_Ruangan->update($data_notifikasi_id, $data);
                                    } elseif ($search['mk_7_8'] != "") {
                                        $arrNotifikasi = [
                                            'mk_7_8' => $search['mk_7_8'],
                                            'cd_7_8' => $search['nim']
                                        ];
                                        $data = [
                                            'status' => "Terverifikasi"
                                        ];
                                        $this->Model_Jadwal->update($jadwal['id'], $arrNotifikasi);
                                        $this->Model_Pinjam_Ruangan->update($data_notifikasi_id, $data);
                                    } elseif ($search['mk_8_9'] != "") {
                                        $arrNotifikasi = [
                                            'mk_8_9' => $search['mk_8_9'],
                                            'cd_8_9' => $search['nim']
                                        ];
                                        $data = [
                                            'status' => "Terverifikasi"
                                        ];
                                        $this->Model_Jadwal->update($jadwal['id'], $arrNotifikasi);
                                        $this->Model_Pinjam_Ruangan->update($data_notifikasi_id, $data);
                                    } elseif ($search['mk_9_10'] != "") {
                                        $arrNotifikasi = [
                                            'mk_9_10' => $search['mk_9_10'],
                                            'cd_9_10' => $search['nim']
                                        ];
                                        $data = [
                                            'status' => "Terverifikasi"
                                        ];
                                        $this->Model_Jadwal->update($jadwal['id'], $arrNotifikasi);
                                        $this->Model_Pinjam_Ruangan->update($data_notifikasi_id, $data);
                                    } elseif ($search['mk_10_11'] != "") {
                                        $arrNotifikasi = [
                                            'mk_10_11' => $search['mk_10_11'],
                                            'cd_10_11' => $search['nim']
                                        ];
                                        $data = [
                                            'status' => "Terverifikasi"
                                        ];
                                        $this->Model_Jadwal->update($jadwal['id'], $arrNotifikasi);
                                        $this->Model_Pinjam_Ruangan->update($data_notifikasi_id, $data);
                                    } elseif ($search['mk_11_12'] != "") {
                                        $arrNotifikasi = [
                                            'mk_11_12' => $search['mk_11_12'],
                                            'cd_11_12' => $search['nim']
                                        ];
                                        $data = [
                                            'status' => "Terverifikasi"
                                        ];
                                        $this->Model_Jadwal->update($jadwal['id'], $arrNotifikasi);
                                        $this->Model_Pinjam_Ruangan->update($data_notifikasi_id, $data);
                                    } elseif ($search['mk_12_13'] != "") {
                                        $arrNotifikasi = [
                                            'mk_12_13' => $search['mk_12_13'],
                                            'cd_12_13' => $search['nim']
                                        ];
                                        $data = [
                                            'status' => "Terverifikasi"
                                        ];
                                        $this->Model_Jadwal->update($jadwal['id'], $arrNotifikasi);
                                        $this->Model_Pinjam_Ruangan->update($data_notifikasi_id, $data);
                                    } elseif ($search['mk_13_14'] != "") {
                                        $arrNotifikasi = [
                                            'mk_13_14' => $search['mk_13_14'],
                                            'cd_13_14' => $search['nim']
                                        ];
                                        $data = [
                                            'status' => "Terverifikasi"
                                        ];
                                        $this->Model_Jadwal->update($jadwal['id'], $arrNotifikasi);
                                        $this->Model_Pinjam_Ruangan->update($data_notifikasi_id, $data);
                                    } elseif ($search['mk_14_15'] != "") {
                                        $arrNotifikasi = [
                                            'mk_14_15' => $search['mk_14_15'],
                                            'cd_14_15' => $search['nim']
                                        ];
                                        $data = [
                                            'status' => "Terverifikasi"
                                        ];
                                        $this->Model_Jadwal->update($jadwal['id'], $arrNotifikasi);
                                        $this->Model_Pinjam_Ruangan->update($data_notifikasi_id, $data);
                                    } elseif ($search['mk_16_17'] != "") {
                                        $arrNotifikasi = [
                                            'mk_16_17' => $search['mk_16_17'],
                                            'cd_16_17' => $search['nim']
                                        ];
                                        $data = [
                                            'status' => "Terverifikasi"
                                        ];
                                        $this->Model_Jadwal->update($jadwal['id'], $arrNotifikasi);
                                        $this->Model_Pinjam_Ruangan->update($data_notifikasi_id, $data);
                                    } elseif ($search['mk_17_18'] != "") {
                                        $arrNotifikasi = [
                                            'mk_17_18' => $search['mk_17_18'],
                                            'cd_17_18' => $search['nim']
                                        ];
                                        $data = [
                                            'status' => "Terverifikasi"
                                        ];
                                        $this->Model_Jadwal->update($jadwal['id'], $arrNotifikasi);
                                        $this->Model_Pinjam_Ruangan->update($data_notifikasi_id, $data);
                                    } elseif ($search['mk_18_19'] != "") {
                                        $arrNotifikasi = [
                                            'mk_18_19' => $search['mk_18_19'],
                                            'cd_18_19' => $search['nim']
                                        ];
                                        $data = [
                                            'status' => "Terverifikasi"
                                        ];
                                        $this->Model_Jadwal->update($jadwal['id'], $arrNotifikasi);
                                        $this->Model_Pinjam_Ruangan->update($data_notifikasi_id, $data);
                                    }
                                }
                            }
                        }
                    }
                }
            }
            // $this->Model_Pinjam_Ruangan->update($data_notifikasi_id, $data);
        }
        return redirect()->to(base_url('allnotifikasi'));
    }
}
