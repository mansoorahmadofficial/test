<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Auth extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'           =>'INT',
                'constraint'     =>11,
                'unsigned'       =>true,
                'auto_increment' =>true,
            ],
            'fname'=>[
                'type'          =>'VARCHAR',
                'constraint'    =>'30',
                'null'          =>false, 
            ],
            'lname'=>[
                'type'          =>'VARCHAR',
                'constraint'    =>'30',
                'null'          =>true, 
            ],
            'father_name'=>[
                'type'          =>'VARCHAR',
                'constraint'    =>'100',
                'null'          =>false, 
            ],
            'mobile'=>[
                'type'          =>'VARCHAR',
                'constraint'    =>'16',
                'null'          =>false, 
            ],
            'email'=>[
                'type'          =>'VARCHAR',
                'constraint'    =>'100',
                'null'          =>false, 
            ],
            'password'=>[
                'type'          =>'VARCHAR',
                'constraint'    =>'255',
                'null'          =>false, 
            ],
            'role_id'=>[
                'type'          =>'INT',
                'constraint'    =>11,
                'null'          =>false,
            ],
            'dob'=>[
                'type'          =>'DATE',
                'null'          =>false,
            ],
            'status'=>[
                'type'          =>'TINYINT',
                'constraint'    =>1,
                'default'       =>0,
                'null'          =>false,
            ],
            'verification_token'=>[
                'type'          =>'VARCHAR',
                'constraint'    =>255,
                'null'          =>false,
            ],
            'verified'=>[
                'type'          =>'TINYINT',
                'constraint'    =>1,
                'default'       =>0,
                'null'          =>false,
            ],
            'created_at' => [
                'type'      => 'DATETIME',
                'default'   => date('Y-m-d H:i:s'),
            ],
            'updated_at' => [
                'type'      => 'DATETIME',
                'default'   => date('Y-m-d H:i:s'),
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addKey('role_id');
        $this->forge->createTable('tbl_users');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_users');
    }
}
