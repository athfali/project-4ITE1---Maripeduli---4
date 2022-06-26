<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnToTableDonasis extends Migration
{
    public function up()
    {
        $fields = [
            "created_at DATETIME  DEFAULT CURRENT_TIMESTAMP",
            "updated_at DATETIME  DEFAULT CURRENT_TIMESTAMP",
            "deleted_at" => [
                "type"=> "DATETIME",
                "null" => true,
                
            ],
    ];

        $this->forge->addColumn('donasis', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('donasis', true);
    }
}
