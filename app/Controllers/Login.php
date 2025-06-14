<?php

namespace App\Controllers;

use App\Models\Model_Users;

class Login extends BaseController
{

    protected $Model_Users;

    public function __construct()
    {
        $this->Model_Users = new Model_Users();
    }

    public function login()
    {
        $ModelUsers = new \App\Models\Model_Users();
        $login = $this->request->getPost('login');

        if ($login) {
            $nim = $this->request->getPost('nim');
            $password = $this->request->getPost('password');


            $hash_password = hash('sha256', (string) $password);

            if (empty($err)) {
                $dataUser = $ModelUsers->where("nim", $nim)->first();

                if (empty($dataUser) || !isset($dataUser['password']) || $dataUser['password'] != $hash_password) {
                    $err = "Nim Atau Password Tidak Sesuai";
                }
            }

            if (empty($err) && $dataUser['status'] === "admin") {
                $dataSesion = [
                    'user_id' => $dataUser['id'],
                    'user_fname' => $dataUser['nama_depan'],
                    'user_lname' => $dataUser['nama_belakang'],
                    'user_nim' => $dataUser['nim'],
                    'user_email' => $dataUser['email'],
                    'user_password' => $dataUser['password'],
                    'user_status' => $dataUser['status']
                ];
                session()->set($dataSesion);
                return redirect()->to(base_url('dashboard'));
            } elseif (empty($err) && $dataUser['status'] === "user") {
                $dataSesion = [
                    'user_id' => $dataUser['id'],
                    'user_fname' => $dataUser['nama_depan'],
                    'user_lname' => $dataUser['nama_belakang'],
                    'user_nim' => $dataUser['nim'],
                    'user_email' => $dataUser['email'],
                    'user_password' => $dataUser['password'],
                    'user_status' => $dataUser['status']
                ];
                session()->set($dataSesion);
                return redirect()->to(base_url('/'));
            }

            if ($err) {
                session()->setFlashdata('error', $err);
                return redirect()->to(base_url('login'));
            }
        }

        return view('login');
    }
    public function logOut()
    {
        $dataSesion = [
            'user_id' => "",
            'user_fname' => "",
            'user_lname' => "",
            'user_nim' => "",
            'user_email' => "",
            'user_password' => "",
            'user_status' => ""
        ];
        session()->set($dataSesion);
        // dd($dataSesion);
        return redirect()->to(base_url('/'));
    }
}
