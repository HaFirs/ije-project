<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_nama'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'user_username' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'user_password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'user_gender' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'user_email' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'user_nohp' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'user_motto' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'user_about' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'user_facebook' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'user_instagram' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'user_twitter' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'user_linkedin' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'user_status' => [
                'type' => 'INT',
                'constraint' => 2,
                'default' => 1,
            ],
            'user_level' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP',
            'user_photo' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
