<?php
namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\GaleriModel;
use App\Models\KategoriModel;
use App\Models\PostsModel;
use App\Models\SosmedModel;

class Berita extends BaseController{

    function __construct(){
        $this->m_berita = new PostsModel();
        $this->m_sosmed = new SosmedModel();
        $this->m_galeri = new GaleriModel();
        $this->m_cats = new KategoriModel();
    }

    function index(){
        $data = [];

        if ($this->request->getGet('search')) {
            $keyword = $this->request->getGet('search');

            $jumlah_baris = '10';
            $post_type = 'page';
            $group_dataset = "dt";

            $dataBerita = $this->m_berita->beritaBuatUser($post_type, $jumlah_baris, $keyword, $group_dataset);
        } else {
            $post_type = 'page';
            $jumlah_baris = '10';
            $keyword = "";
            $group_dataset = "dt";
    
            $dataBerita = $this->m_berita->beritaBuatUser($post_type, $jumlah_baris, $keyword, $group_dataset);
        }
       

        $data['record'] = $dataBerita['record'];
        $data['pager'] = $dataBerita['pager'];

        $data['judul'] = 'Website Desa Tejang | Berita';
        $data['judulNav'] = 'Berita';
        $data['galeri'] = $this->m_galeri->getThreeGaleri();
        $data['kategori'] = $this->m_cats->getData();
        

        return view("user/v_user_berita", $data);
    }

    function detailBerita($slug){
        $data=[];

        $isBeritaExist = $this->m_berita->getBeritaBySlug($slug);

        if (!$isBeritaExist) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();  
        }

        $data['judul'] = 'Website Desa Tejang | Berita';
        $data['judulNav'] = 'Berita';
        $data['berita'] = $isBeritaExist;
        $data['link_instagram'] = $this->m_sosmed->getSosmed("Instagram")['link'];
        $data['link_facebook'] = $this->m_sosmed->getSosmed("Facebook")['link'];
        $data['link_whatsapp'] = $this->m_sosmed->getSosmed("Whatsapp")['link'];
        $data['galeri'] = $this->m_galeri->getThreeGaleri();
        $data['kategori'] = $this->m_cats->getData();
        $data['moreBerita'] = $this->m_berita->getMorePostCategories($isBeritaExist['kategori_id']);

        return view("user/v_user_detail_berita", $data);
    }
    
}