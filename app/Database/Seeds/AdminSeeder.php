<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama'              => 'Admin Satu',
            'email'             => 'admin1@gmail.com',
            'password'          => md5("12345"),
            'nomor_telepon'     => '081287654321',
            'alamat'            => 'Bekasi',
            'level'             => 'admin',
            'photo'             => '1655492542_31979f3b0b39c8915053.jpg',
        ];

        // Simple Queries
        $this->db->table('admins')->insert($data);
        
        $data = [
            'nama'              => 'Admin Dua',
            'email'             => 'admin2@gmail.com',
            'password'          => md5("12345"),
            'nomor_telepon'     => '081287654321',
            'alamat'            => 'Sulawesi',
            'level'             => 'admin',
            'photo'             => '1655494612_ba220b8bc249be65540f.jpg',
            
        ];
        // Using Query Builder
        $this->db->table('admins')->insert($data);

    }
}
