<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peminjaman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'borrow_id' => ['type' => 'INT', 'auto_increment' => true],
            'member_id' => ['type' => 'INT'],
            'book_id' => ['type' => 'INT'],
            'borrow_date' => [
                'type' => 'DATE',
                'null' => true
            ],
            'return_date' => ['type' => 'DATE', 'null' => true],
            'status' => ['type' => 'ENUM', 'constraint' => ['borrowed', 'returned', 'late'], 'default' => 'borrowed'],
        ]);
        $this->forge->addKey('borrow_id', true);
        $this->forge->addForeignKey('member_id', 'members', 'member_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('book_id', 'books', 'book_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('borrowings');
    }

    public function down()
    {
        $this->forge->dropTable('borrowings');
    }
}
