<?php
namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\GaleriModel;
use App\Models\PengaduanModel;

class Pengaduan extends BaseController{

    function __construct(){
        $this->m_pengaduan = new PengaduanModel();
        $this->m_galeri = new GaleriModel();
        $this->validate =\Config\Services::validation();
    }

    function index(){
        $data = [];

        if ($this->request->getMethod()=='post') {
            $data = $this->request->getVar(); 
            
            $rules = [
                'judul_pengaduan' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Judul Pengaduan'
                    ]
                ],   
                'nama_pengadu' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Nama Pengadu'
                    ]
                ],
                'nik_pengadu' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Nik Pengadu'
                    ]
                ],
                'email_pengadu' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Email Pengadu'
                    ]
                ],
                'no_pengadu' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom No Pengadu'
                    ]
                ],
                'isi_pengaduan' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Isi Pengaduan'
                    ]
                ],
            ];

            $file = $this->request->getFile('file_pendukung');

            if (!$this->validate($rules)) {
                session()->setFlashdata('warning', $this->validate->getErrors());
            } else {
                $file_pendukung = '';
                if ($file->getName()) {
                    $file_pendukung = $file->getRandomName();
                }


                $record = [
                    'judul_pengaduan' => $this->request->getPost('judul_pengaduan'),
                    'nama_pengadu' => $this->request->getPost('nama_pengadu'),
                    'nik_pengadu' => $this->request->getPost('nik_pengadu'),
                    'email_pengadu' => $this->request->getPost('email_pengadu'),
                    'no_pengadu' => $this->request->getPost('no_pengadu'),
                    'isi_pengaduan' => $this->request->getVar('isi_pengaduan'),
                    'file_pendukung' => $file_pendukung,
                    'tanggapan_pengaduan' => ' ',
                ];

                $action = $this->m_pengaduan->insertData($record);

                if ($action != false) {
                    if ($file->getName()) {
                        $file->move(LOKASI_UPLOAD, $file_pendukung);
                    }

                    session()->setFlashdata('success', ['Berhasil mengirim pengaduan']);
                    return redirect()->to('pengaduan');
                } else {
                    session()->setFlashdata('warning', ['Gagal mengirim pengaduan']);
                    return redirect()->to('pengaduan');
                }
            }

        }

        $data['pengaduan'] = $this->m_pengaduan->getDataSelesai();
        $data['judul'] = 'Website Desa Tejang | Pengaduan';
        $data['judulNav'] = 'Pengaduan';
        $data['galeri'] = $this->m_galeri->getThreeGaleri();

        return view("user/v_user_pengaduan", $data);
    }
    
}