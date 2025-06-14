<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;

use App\Models\Model_Users;

class DetailAccount extends BaseController
{

    protected $Model_Users;

    public function __construct()
    {
        $this->Model_Users = new Model_Users();
    }

    public function detailAccount()
    {
        if ($this->request->getMethod() === 'post') {
            $data_user_id = $this->request->getPost('user_id');
            $dataArrUsers = $this->Model_Users->findAll();
            $dataSesionUsers = [];

            foreach ($dataArrUsers as $users_data) {
                if ($users_data['id'] == $data_user_id) {
                    // foreach ($dataArrUsers as $users_data_create) {
                    $dataSesionUsers = [
                        'user_id_account' => $users_data['id'],
                        'user_fname_account' => $users_data['nama_depan'],
                        'user_lname_account' => $users_data['nama_belakang'],
                        'user_nim_account' => $users_data['nim'],
                        'user_email_account' => $users_data['email'],
                        'user_password_account' => $users_data['password'],
                        'user_status_at_account' => $users_data['status'],
                        'user_foto_at_account' => $users_data['foto'],
                    ];
                    // }
                }
            }
            session()->set($dataSesionUsers);
        }
        return view('adminPages/detailAccount');
    }

    public function editAccount()
    {
        if ($this->request->getMethod() === 'post') {
            $data_user_id = $this->request->getPost('user_id');
            $data_user_status = $this->request->getPost('status');

            $dataArrUsers = $this->Model_Users->findAll();
            $data = [];

            foreach ($dataArrUsers as $search) {
                if ($search['id'] == $data_user_id) {
                    $data = [
                        'status' => $data_user_status,
                    ];
                }
            }
            $this->Model_Users->update($data_user_id, $data);
        }
        return redirect()->to(base_url('daftarAccount'));
    }

    public function deleteAccount()
    {
        if ($this->request->getMethod() === 'post') {
            $data_id_user = $this->request->getPost('user_id');

            $this->Model_Users->delete($data_id_user);
        }

        return redirect()->to(base_url('daftarAccount'));
    }
}
