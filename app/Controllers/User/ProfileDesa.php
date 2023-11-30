<?php
namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\AgendaModel;
use App\Models\AparaturDesaModel;
use App\Models\GaleriModel;
use App\Models\ProfileDesaModel;
use App\Models\SosmedModel;
use App\Models\StatistikModel;

class ProfileDesa extends BaseController{

    function __construct(){
        $this->m_profileDesa = new ProfileDesaModel();
        $this->m_agenda = new AgendaModel();
        $this->m_aparatur = new AparaturDesaModel();
        $this->m_sosmed = new SosmedModel();
        $this->m_galeri = new GaleriModel();
        $this->m_statistik = new StatistikModel();
    }

    function Sejarah(){

        $profileDesa = $this->m_profileDesa->getData();

        $data = [];
        $data['judul'] = 'Website Desa Tejang';
        $data['judulNav'] = 'Sejarah';
        $data['sejarah'] = $profileDesa['sejarah'];
        $data['hero_image'] = $profileDesa['image'];

        $data['agenda_desa_mendatang'] = $this->m_agenda->getDataMendatang();
        $data['agenda_desa_selesai'] = $this->m_agenda->getDataSelesai();
        $data['aparatur_desa'] = $this->m_aparatur->getData();
        $data['link_instagram'] = $this->m_sosmed->getSosmed("Instagram")['link'];
        $data['link_facebook'] = $this->m_sosmed->getSosmed("Facebook")['link'];
        $data['link_whatsapp'] = $this->m_sosmed->getSosmed("Whatsapp")['link'];
        $data['galeri'] = $this->m_galeri->getThreeGaleri();
        $data['statistik'] = $this->m_statistik->getData();



        return view("user/v_user_sejarah", $data);
    }

    function Visi_Misi(){

        $profileDesa = $this->m_profileDesa->getData();

        $data = [];
        $data['judul'] = 'Website Desa Tejang';
        $data['judulNav'] = 'Sejarah';
        $data['visi'] = $profileDesa['visi'];
        $data['misi'] = $profileDesa['misi'];
        $data['hero_image'] = $profileDesa['image'];


        $data['agenda_desa_mendatang'] = $this->m_agenda->getDataMendatang();
        $data['agenda_desa_selesai'] = $this->m_agenda->getDataSelesai();
        $data['aparatur_desa'] = $this->m_aparatur->getData();
        $data['link_instagram'] = $this->m_sosmed->getSosmed("Instagram")['link'];
        $data['link_facebook'] = $this->m_sosmed->getSosmed("Facebook")['link'];
        $data['link_whatsapp'] = $this->m_sosmed->getSosmed("Whatsapp")['link'];
        $data['galeri'] = $this->m_galeri->getThreeGaleri();
        $data['statistik'] = $this->m_statistik->getData();



        return view("user/v_user_visi_misi", $data);
    }
    
    function Deskripsi_Desa(){

        $profileDesa = $this->m_profileDesa->getData();

        $data = [];
        $data['judul'] = 'Website Desa Tejang';
        $data['judulNav'] = 'Sejarah';
        $data['deskripsi_desa'] = $profileDesa['deskripsi_desa'];
        $data['hero_image'] = $profileDesa['image'];

        $data['agenda_desa_mendatang'] = $this->m_agenda->getDataMendatang();
        $data['agenda_desa_selesai'] = $this->m_agenda->getDataSelesai();
        $data['aparatur_desa'] = $this->m_aparatur->getData();
        $data['link_instagram'] = $this->m_sosmed->getSosmed("Instagram")['link'];
        $data['link_facebook'] = $this->m_sosmed->getSosmed("Facebook")['link'];
        $data['link_whatsapp'] = $this->m_sosmed->getSosmed("Whatsapp")['link'];
        $data['statistik'] = $this->m_statistik->getData();
        $data['galeri'] = $this->m_galeri->getThreeGaleri();


        return view("user/v_user_deskripsi_desa", $data);
    }
}