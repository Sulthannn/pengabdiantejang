<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use PHPUnit\Framework\Constraint\Constraint;

class ProfileDesa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_profile_desa'=>[
                'type'=>'INT',
                'constraint'=>11,
                'auto_increment'=>true
            ],
            'deskripsi_desa'=>[
                'type'=>'LONGTEXT',
                'null'=>true,
                'default'=>null,
            ],
            'visi'=>[
                'type'=>'LONGTEXT',
                'null'=>true,
                'default'=>null,
            ],
            'misi'=>[
                'type'=>'LONGTEXT',
                'null'=>true,
                'default'=>null,
            ],
            'sejarah'=>[
                'type'=>'LONGTEXT',
                'null'=>true,
                'default'=>null,
            ],
            'image'=>[
                'type'=>'VARCHAR',
                'constraint'=>'200',
            ]
        ]);

        $this->forge->addKey('id_profile_desa',TRUE);
        $this->forge->createTable('profile_desa', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('profile_desa');
    }
}
