<?php
namespace App\Models;

use CodeIgniter\Model;
helper('fungsi_helper');

class PengaduanModel extends Model{
    protected $table = "pengaduan";
    protected $primaryKey = "id_pengaduan";
    protected $allowedFields = ['judul_pengaduan', 'nama_pengadu', 'nik_pengadu', 'email_pengadu', 'no_pengadu', 'isi_pengaduan', 'file_pendukung', 'tanggapan_pengaduan', 'status_pengaduan', 'tanggal_dibuat_pengaduan'];

    public function getData(){
        $builder = $this->table($this->table);
        $pengaduan = $builder->get()->getResultArray();

        return $pengaduan;
    }

    public function getSingleData($id_pengaduan){
        $builder = $this->table($this->table);

        $builder->select('*');
        $builder->where('id_pengaduan', $id_pengaduan);
        $query = $builder->get();

        return $query->getRowArray();
    }

    public function insertData($data){
        $builder = $this->table($this->table);

        if (isset($data['id_pengaduan'])) {
            $action = $builder->save($data);
            $id = $data['id_pengaduan'];
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

    public function deleteData($id_pengaduan){
        $builder = $this->table($this->table);

        $builder->where('id_pengaduan', $id_pengaduan);

        if($builder->delete()){
            return true;
        } else {
            return false;
        }
    }

    public function getDataSelesai(){
        $builder = $this->table($this->table);

        $builder->select('*');
        $builder->where('status_pengaduan', 'selesai');
        $query = $builder->get();

        return $query->getResultArray();
    }

}


?>