<?php
namespace App\Models;

use CodeIgniter\Model;
helper('fungsi_helper');

class GaleriModel extends Model{
    protected $table = "galeri";
    protected $primaryKey = "id_galeri";
    protected $allowedFields = ['judul_galeri', 'file_galeri'];

    public function getData(){
        $builder = $this->table($this->table);
        $galeri = $builder->get()->getResultArray();

        return $galeri;
    }

    public function insertData($data){
        $builder = $this->table($this->table);

        if (isset($data['id_galeri'])) {
            $action = $builder->save($data);
            $id = $data['id_galeri'];
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

    public function deleteData($id_galeri){
        $builder = $this->table($this->table);

        $builder->where('id_galeri', $id_galeri);

        if($builder->delete()){
            return true;
        } else {
            return false;
        }
    }

    function getSingleGaleri($id_galeri){
        $builder = $this->table($this->table);

        $builder->where('id_galeri', $id_galeri);
        $query = $builder->get();

        return $query->getRowArray();
    }

    function getThreeGaleri(){
        $builder = $this->table($this->table);
    
        $builder->orderBy('RAND()')->limit(3); 
        $query = $builder->get();
    
        return $query->getResultArray();
    }

}


?>