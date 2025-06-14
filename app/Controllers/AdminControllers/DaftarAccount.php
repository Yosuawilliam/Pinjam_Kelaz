<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;

use App\Models\Model_Users;

class DaftarAccount extends BaseController
{

    protected $Model_Users;

    public function __construct()
    {
        $this->Model_Users = new Model_Users();
    }

    public function daftarAccount()
    {
        $dataArrUsers = $this->Model_Users->findAll();

        $dataAllUsers = [];

        if (!empty($dataArrUsers)) {
            foreach ($dataArrUsers as $data_users) {
                // if ($data_users['id'] != session()->get('user_id')) {
                $dataAllUsers[] = [
                    'user_id' => $data_users['id'],
                    'user_fname' => $data_users['nama_depan'],
                    'user_lname' => $data_users['nama_belakang'],
                    'user_nim' => $data_users['nim'],
                    'user_email' => $data_users['email'],
                    'user_password' => $data_users['password'],
                    'user_status' => $data_users['status'],
                    'user_foto' => $data_users['foto'],

                ];
                // }
            }
        }

        session()->set('dataSesion_All_Users', $dataAllUsers);

        return view('adminPages/daftarAccount');
    }
}
