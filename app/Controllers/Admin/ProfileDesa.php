<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProfileDesaModel;
use CodeIgniter\Session\Session;

class ProfileDesa extends BaseController{

    function CRUD_visi_misi(){
        $profileDesa = new ProfileDesaModel();
        $validate = \Config\Services::validation();

        $data = [];
        if ($this->request->getMethod() == 'post') {
            $data =$this->request->getVar();

            $rules = [
                'visi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kolom Visi, mohon untuk diisi'
                    ]
                ],
                'misi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kolom Misi, mohon untuk diisi'
                    ]
                ],
            ];


            if (!$this->validate($rules)) {
                session()->setFlashdata('warning', $validate->getErrors());
            } else {
                $visi = str_replace("'", "", htmlspecialchars($this->request->getVar('visi'), ENT_QUOTES));
                $misi = str_replace("'", "", htmlspecialchars($this->request->getVar('misi'), ENT_QUOTES));

                $profileDesa->save([
                    'id_profile_desa' => 1,
                    'visi' => $visi,
                    'misi' => $misi,
                ]);

                // Redirect atau tampilkan pesan sukses
                return redirect()->to(base_url('admin/dashboard/visi-misi'))->with('alert', ['Data berhasil Diubah']);
            }

        }

        $data['judul'] = 'Ubah Visi Misi';
        $data['dataDesa'] = $profileDesa->getData();

        return view("admin/v_dashboard_admin_visi_misi", $data);
    }

    function ProfileDesaIndex(){
        $profileDesa = new ProfileDesaModel();
        $validate = \Config\Services::validation();

        $data = [];
        if ($this->request->getMethod() == 'post') {
            $data =$this->request->getVar();

            $rules = [
                'deskripsi_desa' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harap isi kolom deskripsi desa'
                    ]
                ],
            ];


            if (!$this->validate($rules)) {
                session()->setFlashdata('warning', $validate->getErrors());
            } else {
                $deskripsi_desa = str_replace("'", "", htmlspecialchars($this->request->getVar('deskripsi_desa'), ENT_QUOTES));

                $profileDesa->save([
                    'id_profile_desa' => 1,
                    'deskripsi_desa' => $deskripsi_desa,
                ]);

                // Redirect atau tampilkan pesan sukses
                return redirect()->to(base_url('admin/dashboard/profile-desa'))->with('alert', ['Data berhasil Diubah']);
            }

        }

        $data['judul'] = 'Ubah Deskripsi Profile Desa';
        $data['dataDesa'] = $profileDesa->getData();

        return view('admin/v_dashboard_admin_profile_desa', $data);
    }
    
    function SejarahDesaIndex(){
        $profileDesa = new ProfileDesaModel();
        $validate = \Config\Services::validation();

        $data = [];
        if ($this->request->getMethod() == 'post') {
            $data =$this->request->getVar();

            $rules = [
                'sejarah_desa' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harap isi kolom deskripsi desa'
                    ]
                ],
            ];


            if (!$this->validate($rules)) {
                session()->setFlashdata('warning', $validate->getErrors());
            } else {
                $sejarah_desa = str_replace("'", "", htmlspecialchars($this->request->getVar('sejarah_desa'), ENT_QUOTES));

                $profileDesa->save([
                    'id_profile_desa' => 1,
                    'sejarah' => $sejarah_desa,
                ]);

                // Redirect atau tampilkan pesan sukses
                return redirect()->to(base_url('admin/dashboard/sejarah-desa'))->with('alert', ['Data berhasil Diubah']);
            }

        }

        $data['judul'] = 'Ubah Sejarah Desa';
        $data['dataDesa'] = $profileDesa->getData();

        return view('admin/v_dashboard_admin_sejarah_desa', $data);
    }
    
    function heroImage(){
        $profileDesa = new ProfileDesaModel();
        $validate = \Config\Services::validation();

        $dataGambar = $profileDesa->getData();
        $dataGambar = $dataGambar['image'];

        $data = [];
        $data['image'] = $dataGambar;

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'image' => [
                    'rules' => 'is_image[image]|uploaded[image]',
                    'errors' => [
                        'is_image[image]' => 'Gambar harus memiliki ekstensi valid',
                        'uploaded[image]' => 'Harap pilih gambar',
                    ]
                ],
            ];

            $file = $this->request->getFile('image');

            if (!$this->validate($rules)) {
                session()->setFlashdata('warning', $validate->getErrors());
            } else {
                if ($file->getName()) {
                    $image = $file->getRandomName();
                    if ($dataGambar) {
                        @unlink(LOKASI_UPLOAD."/". $dataGambar);
                    }
                    $file->move(LOKASI_UPLOAD, $image);
                } else {
                    $image = $dataGambar;
                }

                $profileDesa->save([
                    'id_profile_desa' => 1,
                    'image' => $image,
                ]);


                // Redirect atau tampilkan pesan sukses
                return redirect()->to(base_url('admin/dashboard/gambar-utama'))->with('alert', ['Data berhasil Diubah']);
            }

        }

        $data['judul'] = 'Ubah Gambar Utama';
        $data['dataDesa'] = $profileDesa->getData();

        return view('admin/v_dashboard_admin_hero', $data);
    }
    
}