<?php
namespace App\Models;

use CodeIgniter\Model;
helper('fungsi_helper');

class AgendaModel extends Model{
    protected $table = "agenda";
    protected $primaryKey = "id_agenda";
    protected $allowedFields = ['judul_kegiatan', 'waktu_kegiatan', 'lokasi_kegiatan', 'koordinator', 'status_kegiatan'];

    public function getData(){
        $builder = $this->table($this->table);
        $agenda = $builder->get()->getResultArray();

        return $agenda;
    }

    public function insertData($data){
        $builder = $this->table($this->table);

        if (isset($data['id_agenda'])) {
            $action = $builder->save($data);
            $id = $data['id_agenda'];
        } else {
            $action = $builder->save($data);
            $id = $builder->getInsertID();
        }

        if ($action) {
            return $id;
        } else {
            return false;
        }
    }

    public function deleteData($id_agenda){
        $builder = $this->table($this->table);

        $builder->where('id_agenda', $id_agenda);

        if($builder->delete()){
            return true;
        } else {
            return false;
        }
    }

    public function getDataMendatang(){
        $builder = $this->table($this->table);

        $query = $builder->where('status_kegiatan', 'mendatang');

        return $query->get()->getResultArray();
    }

    public function getDataSelesai(){
        $builder = $this->table($this->table);

        $query = $builder->where('status_kegiatan', 'selesai');

        return $query->get()->getResultArray();
    }

}


?>