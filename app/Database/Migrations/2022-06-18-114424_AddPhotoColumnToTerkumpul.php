<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPhotoColumnToTerkumpul extends Migration
{
    public function up()
    {
        $fields = [
            "photo" => [
                "type"=> "TEXT",
            ],
        ];

        $this->forge->addColumn('terkumpuls', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('terkumpuls', 'photo');
    }
}

