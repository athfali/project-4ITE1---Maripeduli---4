<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
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
            "email" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "password" => [
                "type"=> "TEXT",
            ],
            "usia" => [
                "type"=> "VARCHAR",
                "constraint" => "100",
                "null" => true,
                "default" => null,
            ],
            "nomor_telepon" => [
                "type"=> "INT",
                "constraint" => "20"
            ],
            "alamat" => [
                "type"=> "VARCHAR",
                "constraint" => "500",
                "null" => true,
                "default" => null,
            ],
            "level" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
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
        $this->forge->createTable('users', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('users', true); //If Exists drop table products
    }
}
