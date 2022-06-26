<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPhotoColumnToAdmin extends Migration
{
    public function up()
    {
        $fields = [
            "photo" => [
                "type"=> "TEXT",
            ],
        ];

        $this->forge->addColumn('admins', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('admins', 'photo');
    }
}
