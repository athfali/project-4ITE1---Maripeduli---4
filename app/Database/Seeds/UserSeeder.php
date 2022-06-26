<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama'              => 'Syifa',
            'email'             => 'syifa@mail.com',
            'password'          => md5("12345"),
            'usia'              => '20',
            'nomor_telepon'     => 12345,
            'alamat'            => 'Bekasi',
            'level'             => 'user',
            'photo'             => '1655492088_b7edeb9c6cd11ee5ed0f.jpg',
        ];

        // Simple Queries
        $this->db->table('users')->insert($data);
        
        $data = [
            'nama'              => 'Athfali',
            'email'             => 'athfali@mail.com',
            'password'          => md5("12345"),
            'usia'              => '22',
            'nomor_telepon'     => 12345,
            'alamat'            => 'Bandung',
            'level'             => 'user',
            'photo'             => '1655493978_6009b805f56e9bc4726b.jpg',
        ];
        // Using Query Builder
        $this->db->table('users')->insert($data);

        $data = [
            'nama'              => 'Irfan',
            'email'             => 'irfan@mail.com',
            'password'          => md5("12345"),
            'usia'              => '23',
            'nomor_telepon'     => 12345,
            'alamat'            => 'Jakarta',
            'level'             => 'user',
            'photo'             => '1655493978_6009b805f56e9bc4726b.jpg',
        ];
        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}
