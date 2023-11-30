<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AparaturDesaModel;
use App\Models\GaleriModel;

class Galeri extends BaseController{

    function __construct(){
        $this->m_galeri = new AparaturDesaModel();
        $this->validate =\Config\Services::validation();
        $this->m_galeri =new GaleriModel();

    }

    function index(){
        $data = [];

        $data['galeri'] = $this->m_galeri->getData();

        if ($this->request->getGet('action') == 'delete') {
            $idToDelete = $this->request->getGet('id_delete');

            if ($this->m_galeri->getSingleGaleri($idToDelete) == null) {
                return redirect()->to('admin/dashboard/galeri');
            } else {

                $fileToDelete = $this->m_galeri->getSingleGaleri($idToDelete)['file_galeri'];
                
                @unlink(LOKASI_UPLOAD."/".$fileToDelete);
                $action = $this->m_galeri->deleteData($idToDelete);

                if ($action) {
                    session()->setFlashdata('success', ['Berhasil menghapus data']);
                    return redirect()->to('admin/dashboard/galeri');
                } else {
                    session()->setFlashdata('warning', ['Gagal menghapus data']);
                    return redirect()->to('admin/dashboard/galeri');
                }
            }
        }
       

        $data['judul'] = 'Website Desa Tejang | Galeri';

        return view("admin/v_dashboard_admin_galeri", $data);
    }

    function addGaleri(){
        $data = [];

        if ($this->request->getMethod()==='post') {
            $data = $this->request->getVar();

            $rules = [
                'judul_galeri' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Judul Galeri'
                    ]
                ],   
                'file_galeri' => [
                    'rules' => 'is_image[file_galeri]|uploaded[file_galeri]',
                    'errors' => [
                        'is_image[file_galeri]' => 'Masukan Ekstensi gambar yang valid',
                        'uploaded[file_galeri]' => 'Harap Upload sebuah Gambar',
                    ]
                ]
            ];

            $file = $this->request->getFile('file_galeri');

            if (!$this->validate($rules)) {
                session()->setFlashdata('warning', $this->validate->getErrors());
            } else {
                $file_galeri = '';
                if ($file->getName()) {
                    $file_galeri = $file->getRandomName();
                }                

                $record=[
                    'judul_galeri' => $this->request->getVar('judul_galeri'),
                    'file_galeri' => $file_galeri,
                ];

                $action = $this->m_galeri->insertData($record);

                if ($action != false) {
                    if ($file->getName()) {
                        $file->move(LOKASI_UPLOAD, $file_galeri);
                    }

                    session()->setFlashdata('success', ['Berhasil menginputkan data']);
                    return redirect()->to('admin/dashboard/galeri');
                } else {
                    session()->setFlashdata('warning', ['Gagal menginputkan data']);
                    return redirect()->to('admin/dashboard/galeri');
                }
            }
        }
       
        $data['judul'] = 'Website Desa Tejang | Galeri';

        return view("admin/v_dashboard_admin_galeri_create", $data);
    }


}