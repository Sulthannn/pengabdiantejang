<?php
namespace App\Models;

use CodeIgniter\Model;
helper('fungsi_helper');

class AparaturDesaModel extends Model{
    protected $table = "aparatur_desa";
    protected $primaryKey = "id_aparatur";
    protected $allowedFields = ['nama_aparatur', 'posisi_aparatur', 'gambar_aparatur'];

    public function getData(){
        $builder = $this->table($this->table);
        $agenda = $builder->get()->getResultArray();

        return $agenda;
    }

    public function insertData($data){
        $builder = $this->table($this->table);

        if (isset($data['id_aparatur'])) {
            $action = $builder->save($data);
            $id = $data['id_aparatur'];
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

    public function deleteData($id_aparatur){
        $builder = $this->table($this->table);

        $builder->where('id_aparatur', $id_aparatur);

        if($builder->delete()){
            return true;
        } else {
            return false;
        }
    }

    function getSingleAparatur($id_aparatur){
        $builder = $this->table($this->table);

        $builder->where('id_aparatur', $id_aparatur);
        $query = $builder->get();

        return $query->getRowArray();
    }

    function deleteAparatur($id_aparatur){
        $builder = $this->table($this->table);

        $builder->where('id_aparatur', $id_aparatur);

        if($builder->delete()){
            return true;
        } else {
            return false;
        }
    }

}


?>