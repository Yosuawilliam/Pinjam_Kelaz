<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;

use App\Models\Model_Ruangan;

class TambahRuangan extends BaseController
{

    protected $Model_Ruangan;

    public function __construct()
    {
        $this->Model_Ruangan = new Model_Ruangan();
    }

    public function tambahRuangan()
    {
        return view('adminPages/tambahRuang');
    }

    public function addRuangan()
    {
        if ($this->request->getMethod() === 'post') {
            $data_No_Kelas = $this->request->getPost('no_kelas');
            $data_Alamat_Kelas = $this->request->getPost('alamat_kelas');
            $data_Lantai_Kelas = $this->request->getPost('lantai_kelas');
            $data_Foto_kelas = $this->request->getFile('foto_kelas');

            $randomName = $data_Foto_kelas->getRandomName();
            $data_Foto_kelas->move('img', $randomName);
            $name_image = $data_Foto_kelas->getName();

            $data_Ruangan = [
                'no_kelas' => $data_No_Kelas,
                'lokasi_kelas' => $data_Alamat_Kelas,
                'lantai' => $data_Lantai_Kelas,
                'foto_kelas' => $name_image,
            ];

            $this->Model_Ruangan->insert($data_Ruangan);
            return redirect()->to(base_url('semuaRuangan'));
        }
    }
}
