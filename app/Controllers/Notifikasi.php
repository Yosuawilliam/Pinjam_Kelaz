<?php

namespace App\Controllers;

use App\Models\Model_Ruangan;
use App\Models\Model_Pinjam_Ruangan;
use App\Models\Model_Users;

class Notifikasi extends BaseController
{
    protected $Model_Ruangan;
    protected $Model_Pinjam_Ruangan;
    protected $Model_Users;

    public function __construct()
    {
        $this->Model_Ruangan = new Model_Ruangan();
        $this->Model_Pinjam_Ruangan = new Model_Pinjam_Ruangan();
        $this->Model_Users = new Model_Users();
    }

    public function notifikasi()
    {
        $dataArrPinjam_Ruangan = $this->Model_Pinjam_Ruangan->findAll();
        $dataArrRuangan = $this->Model_Ruangan->findAll();
        $data_Notifikasi = [];
        if ($dataArrPinjam_Ruangan != null) {
            foreach ($dataArrPinjam_Ruangan as $dataPinjamRuangan) {
                if ($dataPinjamRuangan['user_id'] == session()->get('user_id')) {
                    foreach ($dataArrRuangan as $data_ruangan) {
                        if ($data_ruangan['id'] == $dataPinjamRuangan['id_kelas']) {
                            $data_Notifikasi[] = [
                                'data_id_notifikasi' => $dataPinjamRuangan['id'],
                                'data_id_ruangan' => $data_ruangan['id'],
                                'data_no_kelas' => $data_ruangan['no_kelas'],
                                'data_foto_kelas' => $data_ruangan['foto_kelas'],
                                'data_tanggal_peminjaman' => $dataPinjamRuangan['tanggal'],
                                'data_status_peminjaman' => $dataPinjamRuangan['status']
                            ];
                        }
                    }
                }
            }
        }
        // dd($data_Notifikasi);
        $dataAllNotifikasi = [
            'dataNotifikasi' => $data_Notifikasi
        ];
        return view('notifikasi', $dataAllNotifikasi);
    }
    public function detailNotifikasi()
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
                                            'data_lokasi_kelas' => $data_ruangan['lokasi_kelas'],
                                            'data_foto_kelas' => $data_ruangan['foto_kelas'],
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
                                            'data_lokasi_kelas' => $data_ruangan['lokasi_kelas'],
                                            'data_foto_kelas' => $data_ruangan['foto_kelas'],
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
                                            'data_lokasi_kelas' => $data_ruangan['lokasi_kelas'],
                                            'data_foto_kelas' => $data_ruangan['foto_kelas'],
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
                                            'data_lokasi_kelas' => $data_ruangan['lokasi_kelas'],
                                            'data_foto_kelas' => $data_ruangan['foto_kelas'],
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
                                            'data_lokasi_kelas' => $data_ruangan['lokasi_kelas'],
                                            'data_foto_kelas' => $data_ruangan['foto_kelas'],
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
                                            'data_lokasi_kelas' => $data_ruangan['lokasi_kelas'],
                                            'data_foto_kelas' => $data_ruangan['foto_kelas'],
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
                                            'data_lokasi_kelas' => $data_ruangan['lokasi_kelas'],
                                            'data_foto_kelas' => $data_ruangan['foto_kelas'],
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
                                            'data_lokasi_kelas' => $data_ruangan['lokasi_kelas'],
                                            'data_foto_kelas' => $data_ruangan['foto_kelas'],
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
                                            'data_lokasi_kelas' => $data_ruangan['lokasi_kelas'],
                                            'data_foto_kelas' => $data_ruangan['foto_kelas'],
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
                                            'data_lokasi_kelas' => $data_ruangan['lokasi_kelas'],
                                            'data_foto_kelas' => $data_ruangan['foto_kelas'],
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
                                            'data_lokasi_kelas' => $data_ruangan['lokasi_kelas'],
                                            'data_foto_kelas' => $data_ruangan['foto_kelas'],
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
                                            'data_lokasi_kelas' => $data_ruangan['lokasi_kelas'],
                                            'data_foto_kelas' => $data_ruangan['foto_kelas'],
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
        // $dataDetailNotifikasi = [
        //     'dataNotifikasi' => $data_Notifikasi
        // ];
        // dd($dataDetailNotifikasi);
        return view('detailNotifikasi', $data_Notifikasi);
    }
    public function deleteNotifikasi()
    {
        if ($this->request->getMethod() === 'post') {
            $data_id_notifikasi = $this->request->getPost('notifikasi_id');

            $this->Model_Pinjam_Ruangan->delete($data_id_notifikasi);
        }

        return redirect()->to(base_url('notifikasi'));
    }
}
