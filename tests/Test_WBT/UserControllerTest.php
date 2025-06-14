<?php

namespace App\Tests;

use CodeIgniter\Test\CIUnitTestCase;
use App\Controllers\Register;
use CodeIgniter\Config\Services;
use App\Models\Model_Users;

class UserControllerTest extends CIUnitTestCase
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
        $this->controller = new Register();
        $this->Model_Users = new Model_Users();
    }

    // Test jika metode request adalah POST
    public function testAddAccountWithPostMethod()
    {
        // Simulasi input data untuk pengujian
        $data = [
            'f_name' => 'John',
            'l_name' => 'Doe',
            'nim' => '123456789',
            'email' => 'john.doe@example.com',
            'password' => 'password123'
        ];

        // Set metode request ke POST
        $this->request->setMethod('post');
        
        // Simulasi data POST
        $this->request->setGlobal('post', $data);

        // Panggil metode addAccount
        $response = $this->controller->addAccount();

        // Verifikasi bahwa response adalah RedirectResponse
        $this->assertInstanceOf(\CodeIgniter\HTTP\RedirectResponse::class, $response);

        // Verifikasi apakah header Location berisi URL yang benar (redirect ke halaman login)
        $this->assertEquals(base_url('login'), $response->getHeader('Location'));  // Memverifikasi lokasi redirect
    }

    // Test jika metode request bukan POST
    public function testAddAccountWithNonPostMethod()
    {
        // Set metode request ke GET (atau metode lain selain POST)
        $this->request->setMethod('get');
        
        // Panggil metode addAccount (seharusnya tidak memproses data)
        $response = $this->controller->addAccount();
        
        // Verifikasi bahwa response adalah null (karena request bukan POST)
        $this->assertNull($response);  // Response harus null karena metode bukan POST
    }
}
