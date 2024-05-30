<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Roles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'  => 'INT',
                'constraint' =>11,
                'unsigned'       =>true,
                'auto_increment' =>true,
            ],
            'name' =>[
                'type'=>'VARCHAR',
                'constraint' => 30,
                'null'=>false
            ],
            'description'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,
                'null'=>true
            ],
        ]);
        
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tbl_roles');
    }

    public function down()
    {
      $this->forge->dropTable('tbl_roles');
    }
}
