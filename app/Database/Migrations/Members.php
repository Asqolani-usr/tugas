<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Members extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'member_id' => ['type' => 'INT', 'auto_increment' => true],
            'name' => ['type' => 'VARCHAR', 'constraint' => 100],
            'email' => ['type' => 'VARCHAR', 'constraint' => 100, 'unique' => true],
            'membership_date' => ['type' => 'DATE','null' => true],
            'status' => ['type' => 'ENUM', 'constraint' => ['active', 'inactive'], 'default' => 'active'],
        ]);
        $this->forge->addKey('member_id', true);
        $this->forge->createTable('members');
    }

    public function down()
    {
        $this->forge->dropTable('members');
    }
}
