<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'book_id' => ['type' => 'INT', 'auto_increment' => true],
            'title' => ['type' => 'VARCHAR', 'constraint' => 150],
            'author' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'publisher' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'year_published' => ['type' => 'YEAR', 'null' => true],
            'isbn' => ['type' => 'VARCHAR', 'constraint' => 20, 'unique' => true],
            'category' => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
            'available_copies' => ['type' => 'INT', 'default' => 0],
        ]);
        $this->forge->addKey('book_id', true);
        $this->forge->createTable('books', true);
    }

    public function down()
    {
        $this->forge->dropTable('books');
    }
}
