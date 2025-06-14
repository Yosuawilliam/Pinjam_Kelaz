<?php

namespace App\Controllers;

use App\Models\Model_Users;

class Profile extends BaseController
{

    protected $Model_Users;

    public function __construct()
    {
        $this->Model_Users = new Model_Users();
    }

    public function profile()
    {
        $dataArrUsers = $this->Model_Users->findAll();

        $dataUser = [];

        foreach ($dataArrUsers as $users_data) {
            if ($users_data['id'] == session()->get('user_id')) {
                $dataUser = [
                    'user_id' => $users_data['id'],
                    'user_fname' => $users_data['nama_depan'],
                    'user_lname' => $users_data['nama_belakang'],
                    'user_nim' => $users_data['nim'],
                    'user_email' => $users_data['email'],
                    'user_password' => $users_data['password'],
                    'user_status' => $users_data['status'],
                    'user_profile' => $users_data['foto'],
                ];
            }
        }
        session()->set($dataUser);
        return view('profile');
    }

    public function editProfile()
    {
        if ($this->request->getMethod() === 'post') {
            $data_user_id = $this->request->getPost('user_id');
            $data_user_fname = $this->request->getPost('fname');
            $data_user_lname = $this->request->getPost('lname');
            $data_user_nim = $this->request->getPost('nim');
            $data_user_email = $this->request->getPost('email');
            $data_photo_user = $this->request->getFile('photo');

            $dataArrUsers = $this->Model_Users->findAll();

            if ($data_photo_user == '') {
                foreach ($dataArrUsers as $record) {
                    if ($record['id'] == $data_user_id) {
                        $name_image = $record['foto'];
                    }
                }
            } else {
                $randomName = $data_photo_user->getRandomName();
                $data_photo_user->move('img', $randomName);
                $name_image = $data_photo_user->getName();
            }

            $dataUpdateUsers = [];

            foreach ($dataArrUsers as $users_data) {
                if ($users_data['id'] == $data_user_id) {
                    $dataUpdateUsers = [
                        'nama_depan' => $data_user_fname,
                        'nama_belakang' => $data_user_lname,
                        'nim' => $data_user_nim,
                        'email' => $data_user_email,
                        'foto' => $name_image,
                    ];
                }
            }
            $this->Model_Users->update($data_user_id, $dataUpdateUsers);
        }
        return redirect()->to(base_url('profile'));
    }
    public function editPassword()
    {
        if ($this->request->getMethod() === 'post') {
            $data_user_id = $this->request->getPost('user_id');
            $data_user_password = $this->request->getPost('password');
            $hash_password = hash('sha256', (string) $data_user_password);

            $dataArrUsers = $this->Model_Users->findAll();
            dd($hash_password);

            $dataUpdateUsers = [];

            foreach ($dataArrUsers as $users_data) {
                if ($users_data['id'] == $data_user_id) {
                    $dataUpdateUsers = [
                        'password' => $hash_password,
                    ];
                }
            }
            $this->Model_Users->update($data_user_id, $dataUpdateUsers);
        }
        return redirect()->to(base_url('profile'));
    }
}
