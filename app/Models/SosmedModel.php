<?php
namespace App\Models;

use CodeIgniter\Model;

class SosmedModel extends Model{
    protected $table = "sosmed";
    protected $primaryKey = "nama_sosmed";
    protected $allowedFields = ['link'];

    // For getting data
    public function getData(){
        $builder = $this->table($this->table);
        $sosmed = $builder->get()->getResultArray();

        return $sosmed;
    }

    public function UpdateData($data){
        $builder = $this->table($this->table);

        $action = $builder->save($data);

        if ($action) {
            return true;
        } else {
            return false;
        }

    }

    public function getSosmed($sosmed){
        $builder = $this->table($this->table);

        $builder->where('nama_sosmed', $sosmed);
        $query = $builder->get();

        return $query->getRowArray();
    }

}
