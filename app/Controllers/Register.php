<?php

namespace App\Controllers;

use App\Models\Model_Users;

class Register extends BaseController
{

    protected $Model_Users;

    public function __construct()
    {
        $this->Model_Users = new Model_Users();
    }

    public function register()
    {
        return view('register');
    }   

    public function addAccount()
    {
        if ($this->request->getMethod() === 'post') {
            $data_fname = $this->request->getPost('f_name');
            $data_lname = $this->request->getPost('l_name');
            $data_nim = $this->request->getPost('nim');
            $data_email = $this->request->getPost('email');
            $data_password = $this->request->getPost('password');
            $photoProfile = '110x110.jpg';

            $hash_password = hash('sha256', (string) $data_password);

            $data_Register = [
                'nama_depan' => $data_fname,
                'nama_belakang' => $data_lname,
                'nim' => $data_nim,
                'email' => $data_email,
                'password' => $hash_password,
                'status' => "user",
                'foto' => $photoProfile
            ];

            $this->Model_Users->insert($data_Register);
            return redirect()->to(base_url('login'));
        }
    }
}


