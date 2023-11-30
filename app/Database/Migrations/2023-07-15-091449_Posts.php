<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Posts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_post' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'post_title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'unique' => true,
            ],
            'post_status' => [
                'type' => 'ENUM',
                'constraint' => ['active', 'inactive'],
                'default' => 'active'
            ],
            'post_type' => [
                'type' => 'ENUM',
                'constraint' => ['article', 'page'],
                'default' => 'article',
            ],
            'post_thumb' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'post_description' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'post_content' => [
                'type' => 'LONGTEXT',
            ],
            'kategori_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'after' => 'post_content', // Ubah posisi kolom jika diperlukan
                'null' => true,
            ],
        
            'post_time timestamp default now()'
        ]);
        
        $this->forge->addKey('id_post', true);
        $this->forge->createTable('posts');
        $this->forge->addForeignKey('kategori_id', 'kategori_post', 'id_kategori', 'CASCADE', 'SET NULL');
    }

    public function down()
    {
        $this->forge->dropForeignKey('posts', 'posts_kategori_id_foreign');
        $this->forge->dropColumn('posts', 'kategori_id');
        $this->forge->dropTable('posts');
    }
}
