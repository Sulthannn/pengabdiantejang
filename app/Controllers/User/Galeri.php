<?php
namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\AgendaModel;
use App\Models\AparaturDesaModel;
use App\Models\GaleriModel;
use App\Models\SosmedModel;
use App\Models\StatistikModel;

class Galeri extends BaseController{

    function __construct(){
        $this->m_aparatur = new AparaturDesaModel();
        $this->m_agenda = new AgendaModel();
        $this->m_sosmed = new SosmedModel();
        $this->m_galeri = new GaleriModel();
        $this->m_statistik = new StatistikModel();
    }

    function index(){
        $data = [];

        
        $data['galeris'] = $this->m_galeri->getData();
        $data['judul'] = 'Website Desa Tejang | Berita';
        $data['judulNav'] = 'Berita';
        $data['agenda_desa_mendatang'] = $this->m_agenda->getDataMendatang();
        $data['agenda_desa_selesai'] = $this->m_agenda->getDataSelesai();
        $data['aparatur_desa'] = $this->m_aparatur->getData();
        $data['link_instagram'] = $this->m_sosmed->getSosmed("Instagram")['link'];
        $data['link_facebook'] = $this->m_sosmed->getSosmed("Facebook")['link'];
        $data['link_whatsapp'] = $this->m_sosmed->getSosmed("Whatsapp")['link'];
        $data['galeri'] = $this->m_galeri->getThreeGaleri();
        $data['statistik'] = $this->m_statistik->getData();

        
        // dd($data);
    

        return view("user/v_user_galeri", $data);
    }
    
}