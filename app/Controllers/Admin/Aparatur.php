<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AparaturDesaModel;

class Aparatur extends BaseController{

    function __construct(){
        $this->m_aparatur = new AparaturDesaModel();
        $this->validate =\Config\Services::validation();

    }

    function index(){
        $data = [];

        $data['aparatur'] = $this->m_aparatur->getData();

        if ($this->request->getGet('action') == 'delete') {
            $idToDelete = $this->request->getGet('id_delete');

            if ($this->m_aparatur->getSingleAparatur($idToDelete) == null) {
                return redirect()->to('admin/dashboard/aparatur');
            } else {
                
                $fileToDelete = $this->m_aparatur->getSingleAparatur($idToDelete)['gambar_aparatur'];
                
                if ($fileToDelete != 'profile.png') {
                    @unlink(LOKASI_UPLOAD."/".$fileToDelete);
                }
                $action = $this->m_aparatur->deleteAparatur($idToDelete);

                if ($action) {
                    session()->setFlashdata('success', ['Berhasil menghapus data']);
                    return redirect()->to('admin/dashboard/aparatur');
                } else {
                    session()->setFlashdata('warning', ['Gagal menghapus data']);
                    return redirect()->to('admin/dashboard/aparatur/create');
                }
            }
        }
       

        $data['judul'] = 'Website Desa Tejang | Aparatur';
        $data['judulNav'] = 'Aparatur';

        return view("admin/v_dashboard_admin_aparatur", $data);
    }

    function addAparatur(){
        $data = [];

        if ($this->request->getMethod()==='post') {
            $data = $this->request->getVar();

            $rules = [
                'nama_aparatur' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Nama Aparatur'
                    ]
                ],   
                'posisi_aparatur' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Posisi Aparatur'
                    ]
                ],   
                'gambar_aparatur' => [
                    'rules' => 'is_image[gambar_aparatur]',
                    'errors' => [
                        'required' => 'Masukan Ekstensi gambar yang valid'
                    ]
                ]
            ];

            $file = $this->request->getFile('gambar_aparatur');

            if (!$this->validate($rules)) {
                session()->setFlashdata('warning', $this->validate->getErrors());
            } else {
                $gambar_aparatur = 'profile.png';
                if ($file->getName()) {
                    $gambar_aparatur = $file->getRandomName();
                }                

                $record=[
                    'nama_aparatur' => $this->request->getVar('nama_aparatur'),
                    'posisi_aparatur' => $this->request->getVar('posisi_aparatur'),
                    'gambar_aparatur' => $gambar_aparatur,
                ];

                $action = $this->m_aparatur->insertData($record);

                if ($action != false) {
                    if ($file->getName()) {
                        $file->move(LOKASI_UPLOAD, $gambar_aparatur);
                    }

                    session()->setFlashdata('success', ['Berhasil menginputkan data']);
                    return redirect()->to('admin/dashboard/aparatur');
                } else {
                    session()->setFlashdata('warning', ['Gagal menginputkan data']);
                    return redirect()->to('admin/dashboard/aparatur/create');
                }
            }
        }
       
        $data['judul'] = 'Website Desa Tejang | Aparatur';
        $data['judulNav'] = 'Aparatur';

        return view("admin/v_dashboard_admin_aparatur_form", $data);
    }

    function editAparatur($id_aparatur){
        $data = [];

        $dataAparatur = $this->m_aparatur->getSingleAparatur($id_aparatur);

        if (empty($dataAparatur)) {
            return redirect()->to('admin/dashboard/aparatur');
        }

        $data = $dataAparatur;

        if ($this->request->getMethod()=='post') {
            $data = $this->request->getVar(); 
            $rules = [
                'nama_aparatur' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Nama Aparatur'
                    ]
                ],   
                'posisi_aparatur' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Posisi Aparatur'
                    ]
                ],   
            ];

            $file = $this->request->getFile('gambar_aparatur');

            if (!$this->validate($rules)) {
                session()->setFlashdata('warning', $this->validate->getErrors());
            } else {
                $gambar_aparatur = $dataAparatur['gambar_aparatur'];
                if ($file->getName()) {
                    $gambar_aparatur = $file->getRandomName();
                }
                $record=[
                    'nama_aparatur' => $this->request->getVar('nama_aparatur'),
                    'posisi_aparatur' => $this->request->getVar('posisi_aparatur'),
                    'gambar_aparatur' => $gambar_aparatur,
                    'id_aparatur' => $id_aparatur,
                ];

                $action = $this->m_aparatur->insertData($record);

                if ($action != false) {
                    if ($file->getName()) {
                        if ($dataAparatur['gambar_aparatur'] != 'profile.png') {
                            @unlink(LOKASI_UPLOAD."/".$dataAparatur['gambar_aparatur']);
                        }
                        $file->move(LOKASI_UPLOAD, $gambar_aparatur);
                    }

                    session()->setFlashdata('success', ['Berhasil menginputkan data']);
                    return redirect()->to('admin/dashboard/aparatur');
                } else {
                    session()->setFlashdata('warning', ['Gagal menginputkan data']);
                    return redirect()->to('admin/dashboard/aparatur/create');
                }
            }

        }

        $data['judul'] = "Posts";

        return view('admin/v_dashboard_admin_aparatur_form', $data);

    }


}