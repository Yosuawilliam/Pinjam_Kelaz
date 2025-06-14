<?php
use PHPUnit\Framework\TestCase;
use CodeIgniter\Test\CIDatabaseTestCase;

class UserProfileTest extends CIDatabaseTestCase
{
    protected $model;

    public function setUp(): void
    {
        parent::setUp();
        $this->model = new \App\Models\Model_Users();
    }

    public function testProfileFetchUserData()
    {
        // Simulate session user_id
        session()->set('user_id', 1);

        // Create mock data user
        $mockUser = [
            'id' => 1,
            'nama_depan' => 'John',
            'nama_belakang' => 'Doe',
            'nim' => '123456',
            'email' => 'john.doe@example.com',
            'password' => 'hashedpassword',
            'status' => 'user',
            'foto' => 'john.jpg'
        ];

        // Insert mock data into the database
        $this->model->insert($mockUser);

        // Simulate calling the profile function
        $data = $this->model->find(1);

        // Assertions to check if data was retrieved correctly
        $this->assertEquals('John', $data['nama_depan']);
        $this->assertEquals('Doe', $data['nama_belakang']);
        $this->assertEquals('123456', $data['nim']);
        $this->assertEquals('john.doe@example.com', $data['email']);
    }
}
