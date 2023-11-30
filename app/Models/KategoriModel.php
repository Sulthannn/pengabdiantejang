<?php
namespace App\Models;

use CodeIgniter\Model;
helper('fungsi_helper');

class KategoriModel extends Model{
    protected $table = "kategori_post";
    protected $primaryKey = "id_kategori";
    protected $allowedFields = ['kategori', 'deskripsi'];

    public function getData(){
        $builder = $this->table($this->table);
        $categories = $builder->get()->getResultArray();

        return $categories;
    }

    public function getSingleKategori($id_kategori){
        $builder = $this->table($this->table);

        $builder->select('*');
        $builder->where('id_kategori', $id_kategori);
        $query = $builder->get();

        return $query->getRowArray();
    }

    // for update data
    public function updateData($id, $data){
        $this->where('id_profile_desa', $id)
        ->update($data);
    }

    public function insertKategori($data){
        $builder = $this->table($this->table);

        if (isset($data['id_kategori'])) {
            $action = $builder->save($data);
            $id = $data['id_kategori'];
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

    function deleteKategori($id_kategori){
        $builder = $this->table($this->table);

        $builder->where('id_kategori', $id_kategori);

        if($builder->delete()){
            return true;
        } else {
            return false;
        }
    }

}


?>