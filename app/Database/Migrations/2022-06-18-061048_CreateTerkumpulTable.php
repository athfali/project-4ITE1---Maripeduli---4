<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTerkumpulTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],

            "nama" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],

            "jumlah" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],

            "e-money" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],

            "deskripsi" => [
                "type"=> "VARCHAR",
                "constraint" => "500",
            ],

            "id_donasi" => [
                "type"=> "INT",
                "null" => true,
            ],

            "donasi_untuk" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
        ];

        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('terkumpuls', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('terkumpuls', true); //If Exists drop table products
    }
}
