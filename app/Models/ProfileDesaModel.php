<?php
namespace App\Models;

use CodeIgniter\Model;

class ProfileDesaModel extends Model{
    protected $table = "profile_desa";
    protected $primaryKey = "id_profile_desa";
    protected $allowedFields = ['deskripsi_desa', 'visi', 'misi', 'sejarah', 'image'];

    // For getting data
    public function getData(){
        $query = $this->select('*')
        ->orderBy('id_profile_desa', 'DESC') 
        ->limit(1)
        ->get();

        return $query->getRowArray();
    }

    // for update data
    public function updateData($id, $data){
        $this->where('id_profile_desa', $id)
        ->update($data);
    }

}
