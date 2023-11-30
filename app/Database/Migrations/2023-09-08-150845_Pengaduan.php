<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengaduan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pengaduan' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'judul_pengaduan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama_pengadu' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nik_pengadu' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'email_pengadu' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'no_pengadu' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'isi_pengaduan' => [
                'type' => 'LONGTEXT',
            ],
            'file_pendukung' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => 'NULL'
            ],
            'tanggapan_pengaduan' => [
                'type' => 'LONGTEXT',
            ],
            'status_pengaduan' => [
                'type' => 'ENUM',
                'constraint' => ['proses', 'selesai'],
                'default' => 'proses',
            ],

            'tanggal_pengaduan timestamp default now()'
        ]);

        $this->forge->addKey('id_pengaduan', true);
        $this->forge->createTable('pengaduan');

    }

    public function down()
    {
        $this->forge->dropTable('pengaduan');
    }
}
