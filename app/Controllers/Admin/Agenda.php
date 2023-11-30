<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AgendaModel;

class Agenda extends BaseController{

    function __construct(){
        $this->m_agenda = new AgendaModel();
        $this->validate =\Config\Services::validation();
    }

    function index(){
        $data = [];
        
        $data['agendas'] = $this->m_agenda->getData();

        if ($this->request->getMethod()=='get') {
            // Change Status to selesai
            if ($this->request->getGet('status') == 'selesai'){
                $record = [
                    'status_kegiatan' => 'selesai',
                    'id_agenda' => $this->request->getGet('id')
                ];

                $action = $this->m_agenda->insertData($record);

                if ($action) {
                    session()->setFlashdata('success', ['Status berhasil diubah']);
                    return redirect()->to('admin/dashboard/agenda');
                } else {
                    session()->setFlashdata('warning', ['Gagal mengubah status']);
                    return redirect()->to('admin/dashboard/agenda');
                }

            } elseif ($this->request->getGet('status') == 'mendatang') { //change status to proses
                $record = [
                    'status_kegiatan' => 'mendatang',
                    'id_agenda' => $this->request->getGet('id')
                ];

                $action = $this->m_agenda->insertData($record);

                if ($action) {
                    session()->setFlashdata('success', ['Status berhasil diubah']);
                    return redirect()->to('admin/dashboard/agenda');
                } else {
                    session()->setFlashdata('warning', ['Gagal mengubah status']);
                    return redirect()->to('admin/dashboard/agenda');
                }
            } elseif ($this->request->getGet('hapus') == 'true') {
                $idToDelete = $this->request->getGet('id');

                $action = $this->m_agenda->deleteData($idToDelete);

                if ($action) {
                    session()->setFlashdata('success', ['Berhasil menghapus Data']);
                    return redirect()->to('admin/dashboard/agenda');
                } else {
                    session()->setFlashdata('warning', ['Gagal menghapus data']);
                    return redirect()->to('admin/dashboard/agenda');
                }
            }
        }
        
        
        $data['judul'] = 'Website Desa Tejang | Agenda';
        return view("admin/v_dashboard_admin_agenda", $data);
    }

    function addAgenda(){
        $data = [];
        
        if ($this->request->getMethod()=='post') {
            $data = $this->request->getVar(); 
            $rules = [
                'judul_kegiatan' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Judul Kegiatan'
                    ]
                ],   
                'waktu_kegiatan' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Waktu Kegiatan'
                    ]
                ],   
                'lokasi_kegiatan' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Lokasi Kegiatan'
                    ]
                ],   
                'koordinator' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Koordinator'
                    ]
                ],   
            ];

            if (!$this->validate($rules)) {
                session()->setFlashdata('warning', $this->validate->getErrors());
            } else {                
                $record=[
                    'judul_kegiatan' => $this->request->getVar('judul_kegiatan'),
                    'lokasi_kegiatan' => $this->request->getVar('lokasi_kegiatan'),
                    'koordinator' => $this->request->getVar('koordinator'),
                    'waktu_kegiatan' => $this->request->getVar('waktu_kegiatan'),
                    'status_kegiatan' => 'mendatang',
                ];

                $action = $this->m_agenda->insertData($record);

                if ($action != false) {
                    session()->setFlashdata('success', ['Berhasil menginputkan data']);
                    return redirect()->to('admin/dashboard/agenda');
                } else {
                    session()->setFlashdata('warning', ['Gagal menginputkan data']);
                    return redirect()->to('admin/dashboard/agenda/create');
                }
            }
        }
        

        $data['judul'] = 'Website Desa Tejang | Agenda';
        return view("admin/v_dashboard_admin_tambah_agenda", $data);
    }
    

}