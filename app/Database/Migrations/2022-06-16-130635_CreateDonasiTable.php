<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDonasiTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "nama_pembuat" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "membutuhkan" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "terkumpul" => [
                "type"=> "INT",
                "null" => true,
            ],
            "deskripsi" => [
                "type"=> "VARCHAR",
                "constraint" => "500",
            ],
            "created_at" => [
                "type" => "TEXT",
                "constraint" => "date-time",
                "null" => true,
            ],
            "updated_at" => [
                "type"=> "TEXT",
                "constraint" => "date-time",
                "null"=> true,
            ],
            "deleted_at" => [
                "type"=> "TEXT",
                "constraint" => "date-time",
                "null"=> true,
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('donasis', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('donasis', true); //If Exists drop table products
    }
}
