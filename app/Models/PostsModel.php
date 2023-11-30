<?php
namespace App\Models;

use CodeIgniter\Model;
helper('fungsi_helper');

class PostsModel extends Model{
    protected $table = "posts";
    protected $primaryKey = "id_post";
    protected $allowedFields = ['post_title', 'post_status', 'post_type', 'post_thumb', 'post_description', 'post_content', 'post_time', 'slug', 'kategori_id'];

    public function makeSlug($title){
        $builder = $this->table($this->table);
        $url = strip_tags($title);
        $url = preg_replace('/[^A-Za-z0-9]/', " ", $url);
        $url = trim($url);
        $url = preg_replace('/[^A-Za-z0-9]/', "-", $url);
        $url = strtolower($url);

        $builder->where('post_title', $title);
        $jumlah = $builder->countAllResults();

        if ($jumlah > 0) {
            $jumlah = $jumlah + 1;
            return $url . "-" . $jumlah;
        }

        return $url;
    }

    public function insertPost($data){
        $builder = $this->table($this->table);

        // foreach($data as $key=>$value){
        //     $data[$key] = purify_html($value);
        // }

        if (isset($data['id_post'])) {
            $action = $builder->save($data);
            $id = $data['id_post'];
        } else {
            $data['slug'] = $this->makeSlug($data['post_title']);
            $action = $builder->save($data);
            $id = $builder->getInsertID();
        }

        if ($action) {
            return $id;
        } else {
            return false;
        }

    }

    public function ListPosts($keyword=null){
        $builder = $this->table($this->table);

        $arr_keyword = explode(" ", $keyword);

        $builder->groupStart();

        for($x=0;$x<count($arr_keyword);$x++){
            $builder->orLike('post_title', $arr_keyword[$x]);
            $builder->orLike('post_description', $arr_keyword[$x]);
            $builder->orLike('post_content', $arr_keyword[$x]);
        }

        $builder->groupEnd();

        $builder->select('*');
        $builder->join('kategori_post', 'kategori_post.id_kategori = posts.kategori_id', 'left');
        $builder->where('kategori_id IS NULL', null, false); // Menambahkan kondisi untuk mengambil data dengan kategori_id NULL
        $builder->orWhere('kategori_post.id_kategori IS NOT NULL');
        $builder->orderBy('post_time', 'desc');

        $data['record'] = $builder->get();
        
        $data['record'] = $data['record']->getResult();
        $data['record'] = json_decode(json_encode($data['record']), true); // Mengubah objek stdClass menjadi array

        return $data;
    }

    function getSinglePost($id_post){
        $builder = $this->table($this->table);

        $builder->select('*');
        $builder->join('kategori_post', 'kategori_post.id_kategori = posts.kategori_id', 'left');
        $builder->where('kategori_id IS NULL', null, false); // Menambahkan kondisi untuk mengambil data dengan kategori_id NULL
        $builder->orWhere('kategori_post.id_kategori IS NOT NULL');
        $builder->where('id_post', $id_post);
        $query = $builder->get();

        return $query->getRowArray();
    }

    function deletePost($id_post){
        $builder = $this->table($this->table);

        $builder->where('id_post', $id_post);

        if($builder->delete()){
            return true;
        } else {
            return false;
        }
    }

    function beritaBuatUser($post_type, $jumlah_baris, $keyword, $group_dataset = null) {
        $builder = $this->table($this->table);

        $arr_keyword = explode(" ", $keyword);
        $builder->groupStart();
        for ($i=0; $i < count($arr_keyword) ; $i++) { 
            $builder->like('post_title', $arr_keyword[$i]);
            $builder->orLike('post_description', $arr_keyword[$i]);
            $builder->orLike('post_content', $arr_keyword[$i]);
        }
        $builder->groupEnd();

        $builder->join('kategori_post', 'kategori_post.id_kategori = posts.kategori_id', 'left');
        $builder->where('kategori_id IS NULL', null, false); // Menambahkan kondisi untuk mengambil data dengan kategori_id NULL
        $builder->orWhere('kategori_post.id_kategori IS NOT NULL');
        $builder->orWhere('post_type', $post_type);
        $builder->orderBy('post_time', 'desc');

        $data['record'] = $builder->paginate($jumlah_baris, $group_dataset);
        $data['pager'] = $builder->pager;

        return $data;
    }

    function getBeritaBySlug($slug){
        $builder = $this->table($this->table);

        $builder->select('*');
        $builder->join('kategori_post', 'kategori_post.id_kategori = posts.kategori_id', 'left');
        $builder->where('kategori_id IS NULL', null, false); // Menambahkan kondisi untuk mengambil data dengan kategori_id NULL
        $builder->orWhere('kategori_post.id_kategori IS NOT NULL');
        $builder->where('slug', $slug);
        $query = $builder->get();

        return $query->getRowArray();
    }

    function getMorePostCategories($categories_id){
        $builder = $this->table($this->table);
        
        $builder->where('kategori_id', $categories_id);
        $builder->orderBy('RAND()')->limit(10); 
        $query = $builder->get();
    
        return $query->getResultArray();
    }

}


?>