<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DonasiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama_pembuat' => 'Yayasan Beramal',
            'membutuhkan'  => 'Rp 5.000.000',
            'terkumpul'    => 100000,
            'deskripsi'    => 'Renovasi Mushola dan Asrama Putri',
            'photo'        => '1655493240_0a47c6f94864d2ebe1bc.jpg',
        ];

        // Simple Queries
        $this->db->table('donasis')->insert($data);
        
        $data = [
            'nama_pembuat' => 'Yayasan Baik',
            'membutuhkan'  => 'Rp 3.000.000',
            'terkumpul'    => 500000,
            'deskripsi'    => 'Sedekah Quran untuk anak yatim',
            'photo'        => '1655493430_7c2984243e0097a314d8.jpg  ',
        ];
        // Using Query Builder
        $this->db->table('donasis')->insert($data);

        $data = [
            'nama_pembuat' => 'Yanti Kurnia',
            'membutuhkan'  => 'Rp 10.000.000',
            'terkumpul'    => 5000000,
            'deskripsi'    => 'Biaya pengobatan kanker',
            'photo'        => '1655493543_08969221f3ac94114cce.jpg',
        ];
        // Using Query Builder
        $this->db->table('donasis')->insert($data);
    }
}
