<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Roles extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'admin',
                'description' => 'The Default Role for Administrator',
            ],
            [
                'name' => 'student',
                'description' => 'The Default Role for Student',
            ],
        ];

        $this->db->table('tbl_roles')->insertBatch($data);
    }
}
