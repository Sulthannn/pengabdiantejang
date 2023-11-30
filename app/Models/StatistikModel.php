<?php
namespace App\Models;

use CodeIgniter\Model;

class StatistikModel extends Model{
    protected $table = "statistik";
    protected $primaryKey = "id_statistik";
    protected $allowedFields = ['judul_statistik', 'jumlah'];

    // For getting data
    public function getData(){
        $builder = $this->table($this->table);
        $statistik = $builder->get()->getResultArray();

        return $statistik;
    }

    public function insertData($data){
        $builder = $this->table($this->table);

        if (isset($data['id_statistik'])) {
            $action = $builder->save($data);
            $id = $data['id_statistik'];
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

    public function getStatistik($statistik){
        $builder = $this->table($this->table);

        $builder->where('id_statistik', $statistik);
        $query = $builder->get();

        return $query->getRowArray();
    }

    public function deleteData($id_statistik){
        $builder = $this->table($this->table);

        $builder->where('id_statistik', $id_statistik);

        if($builder->delete()){
            return true;
        } else {
            return false;
        }
    }
}
