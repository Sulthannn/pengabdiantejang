<?php
namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model{
    protected $table = "admin";
    protected $primaryKey = "email";
    protected $allowedFields = ['username', 'password', 'full_name', 'token'];

    // For getting data
    public function getData($params){
        $builder = $this->table($this->table);
        $builder->where('username=', $params);
        $builder->orWhere('email=', $params);

        $query = $builder->get();

        return $query->getRowArray();
    }

    // for update data
    public function updateData($data){
        $builder = $this->table($this->table);
        if ($builder->save($data)) {
            return true;
        } else {
            return false;
        }
    }


}


?>