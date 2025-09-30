<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTable extends Migration
{
    public function up()
    {
            $this->forge->addField([
"column_name" => [
            'type'           => 'INT',  // important
            'constraint'     => 11,     // important, but some doesnt need this
            'unsigned'       => true,   // optional
            'auto_increment' => true,   // optional if you want auto counting, but important for the id
            'null'           => false,  // not needed for id, but needed for most
            'default'        => 1, // optional 
],
"created_at" => [
    "type" => 'DATETIME',
    null=>true,

], 
"updated_at" => [
    "type" => 'DATETIME',
    "null" => true,
],
"deleted_at"=>[
    "type" => 'DATETIME',
    "null" => true, 
],
            ]);
            $this->forge->addKey('column_name', true); // true makes it primary key
            // $this->forge->addUniqueKey('table_name_here', true);
            // $this->forge->createTable('table_name_here', true);


    }

    public function down()
    {
            $this->forge->dropTable('table_name_here', true);
    }
}
