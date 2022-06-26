<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TerkumpulSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama'          => 'Oboy',
            'jumlah'        => 'Rp 3.000.000',
            'e-money'       => 'DANA',
            'deskripsi'     => 'Renovasi Mushola dan Asrama Putri',
            'id_donasi'     => '11',
            'donasi_untuk'  => 'Yayasan Beramal',
            'photo'         => '1655493240_0a47c6f94864d2ebe1bc.jpg',
        ];

        // Simple Queries
        $this->db->table('terkumpuls')->insert($data);
        
        $data = [
            'nama'          => 'Irfan',
            'jumlah'        => 'Rp 2.050.000',
            'e-money'       => 'OVO',
            'deskripsi'     => 'Renovasi Mushola dan Asrama Putri',
            'id_donasi'     => '12',
            'donasi_untuk'  => 'Yayasan Beramal',
            'photo'         => '1655493240_0a47c6f94864d2ebe1bc.jpg',
        ];

        // Simple Queries
        $this->db->table('terkumpuls')->insert($data);

        $data = [
            'nama'          => 'Fatih',
            'jumlah'        => 'Rp 1.200.000',
            'e-money'       => 'DANA',
            'deskripsi'     => 'Renovasi Mushola dan Asrama Putri',
            'id_donasi'     => '14',
            'donasi_untuk'  => 'Yanti Kurnia',
            'photo'         => '1655493240_0a47c6f94864d2ebe1bc.jpg',
        ];

        // Simple Queries
        $this->db->table('terkumpuls')->insert($data);
    }
}
