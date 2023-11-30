<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\StatistikModel;

class Statistik extends BaseController{

    function __construct(){
        $this->m_statistik = new StatistikModel();
        $this->validate =\Config\Services::validation();
    }

    function index(){
        $data = [];

        if ($this->request->getGet('action') == 'delete') {
            $idToDelete = $this->request->getGet('id_delete');

            if ($this->m_statistik->getStatistik($idToDelete) == null) {
                return redirect()->to('admin/dashboard/statistik');
            } else {
                                
                $action = $this->m_statistik->deleteData($idToDelete);

                if ($action) {
                    session()->setFlashdata('success', ['Berhasil menghapus data']);
                    return redirect()->to('admin/dashboard/statistik');
                } else {
                    session()->setFlashdata('warning', ['Gagal menghapus data']);
                    return redirect()->to('admin/dashboard/statistik');
                }
            }
        }
       


        $data['statistik'] = $this->m_statistik->getData();        
        $data['judul'] = 'Statistik';

        return view('admin/v_dashboard_admin_statistik', $data);
    }

    function addStatistik(){
        $data = $this->request->getVar();

        $rules = [
            'judul_statistik' => [
                'rules' => 'required',
                'errors' =>[
                    'required' => 'Harap isi kolom Judul Statistik'
                ]
            ],   
            'jumlah' => [
                'rules' => 'required',
                'errors' =>[
                    'required' => 'Harap isi kolom Jumlah'
                ]
            ],   
        ];


        if (!$this->validate($rules)) {
            session()->setFlashdata('warning', $this->validate->getErrors());
        } else {
            
            $record=[
                'judul_statistik' => $this->request->getVar('judul_statistik'),
                'jumlah' => $this->request->getVar('jumlah'),
            ];

            $action = $this->m_statistik->insertData($record);

            if ($action != false) {
                session()->setFlashdata('success', ['Berhasil menginputkan data']);
                return redirect()->to('admin/dashboard/statistik');
            } else {
                session()->setFlashdata('warning', ['Gagal menginputkan data']);
                return redirect()->to('admin/dashboard/statistik/create');
            }
        }
    
    
   
    $data['judul'] = 'Website Desa Tejang | Statistik';

    return view("admin/v_dashboard_admin_statistik_form", $data);
    }

}