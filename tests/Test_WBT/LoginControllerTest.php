<?php

namespace App\Tests;

use CodeIgniter\Test\CIUnitTestCase;
use App\Controllers\Login;
use CodeIgniter\Config\Services;
use App\Models\Model_Users;
use CodeIgniter\HTTP\ResponseInterface;

class LoginControllerTest extends CIUnitTestCase
{
    protected $request;
    protected $controller;
    protected $Model_Users;

    // Set up environment untuk pengujian
    public function setUp(): void
    {
        parent::setUp();

        // Inisialisasi objek request dengan benar
        $this->request = Services::request();

        // Inisialisasi controller dan model
        $this->controller = new Login();
        $this->Model_Users = new Model_Users();
    }

    // Test untuk login jika form tidak disubmit
    public function testLoginFormNotSubmitted()
    {
        $response = $this->controller->login();

        // Verifikasi bahwa response adalah view login
        $this->assertStringContainsString('login', $response);
    }

    // Test untuk login dengan nim atau password yang salah
    public function testLoginWithIncorrectCredentials()
    {
        // Simulasi data login dengan nim dan password salah
        $data = [
            'login' => true,
            'nim' => 'incorrect_nim',
            'password' => 'incorrect_password'
        ];

        $this->request->setMethod('post');
        $this->request->setGlobal('post', $data);

        $response = $this->controller->login();

        // Verifikasi apakah flashdata error di-set
        $this->assertTrue(session()->getFlashdata('error') !== null);

        // Verifikasi redirect kembali ke halaman login
        $this->assertEquals('login', $response->getHeader('Location')->getValue());
    }

    // Test untuk login berhasil dengan status admin
    public function testLoginWithAdminStatus()
    {
        // Simulasi data login dengan status admin
        $data = [
            'login' => true,
            'nim' => 'admin_nim',
            'password' => 'admin_password'
        ];

        $this->request->setMethod('post');
        $this->request->setGlobal('post', $data);

        // Mock Model_Users untuk mengembalikan data user
        $mockUser = [
            'id' => 1,
            'nama_depan' => 'John',
            'nama_belakang' => 'Doe',
            'nim' => 'admin_nim',
            'email' => 'admin@example.com',
            'password' => hash('sha256', 'admin_password'),
            'status' => 'admin'
        ];

        $this->Model_Users->shouldReceive('where')
                          ->with('nim', 'admin_nim')
                          ->andReturn([$mockUser]);

        $response = $this->controller->login();

        // Verifikasi session data
        $this->assertEquals('admin_nim', session()->get('user_nim'));
        $this->assertEquals('dashboard', $response->getHeader('Location'));
    }

    // Test untuk login berhasil dengan status user
    public function testLoginWithUserStatus()
    {
        // Simulasi data login dengan status user
        $data = [
            'login' => true,
            'nim' => 'user_nim',
            'password' => 'user_password'
        ];

        $this->request->setMethod('post');
        $this->request->setGlobal('post', $data);

        // Mock Model_Users untuk mengembalikan data user
        $mockUser = [
            'id' => 1,
            'nama_depan' => 'Jane',
            'nama_belakang' => 'Doe',
            'nim' => 'user_nim',
            'email' => 'user@example.com',
            'password' => hash('sha256', 'user_password'),
            'status' => 'user'
        ];

        $this->Model_Users->shouldReceive('where')
                          ->with('nim', 'user_nim')
                          ->andReturn([$mockUser]);

        $response = $this->controller->login();

        // Verifikasi session data
        $this->assertEquals('user_nim', session()->get('user_nim'));
        $this->assertEquals(base_url('/'), $response->getHeader('Location'));
    }

    // Test jika terjadi error
    public function testLoginWithError()
    {
        // Simulasi login dengan data yang salah
        $data = [
            'login' => true,
            'nim' => 'wrong_nim',
            'password' => 'wrong_password'
        ];

        $this->request->setMethod('post');
        $this->request->setGlobal('post', $data);

        // Simulasi data user tidak ditemukan
        $this->Model_Users->shouldReceive('where')
                          ->with('nim', 'wrong_nim')
                          ->andReturn(null);

        $response = $this->controller->login();

        // Verifikasi bahwa error ditampilkan dan pengalihan kembali ke login terjadi
        $this->assertNotNull(session()->getFlashdata('error'));
        $this->assertEquals('login', $response->getHeader('Location')->getValue());
    }
}
