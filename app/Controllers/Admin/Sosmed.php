<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SosmedModel;

class Sosmed extends BaseController{

    function __construct(){
        $this->m_sosmed = new SosmedModel();
        $this->validate =\Config\Services::validation();
    }

    function index(){
        $data = [];

        $data['sosmed'] = $this->m_sosmed->getData();
    
        if ($this->request->getGet('edit_sosmed')) {
            $sosmed = $this->request->getGet('edit_sosmed');

            $singleKategori = $this->m_sosmed->getSosmed($sosmed);
            $data['sosmed_to_edit'] = $singleKategori;
        }

        if ($this->request->getMethod() == 'post') {
            $data = $this->request->getVar();

            $rules = [
                'link' => [
                    'rules' => 'required|regex_match[|https:\/\/www\..*]',
                    'errors' =>[
                        'required' => 'Harap isi kolom Link',
                        'regex_match' => 'Link harus diawali dengan "https://www."'
                    ]
                ],   
            ];

            if (!$this->validate($rules)) {
                session()->setFlashdata('warning', $this->validate->getErrors());
            } else {

                $record = [
                    'nama_sosmed' => $this->request->getPost('nama_sosmed'),
                    'link' => $this->request->getPost('link'),
                ];

                $action = $this->m_sosmed->UpdateData($record);

                if ($action !== false) {
                    session()->setFlashdata('success', ['Berhasil mengedit kategori']);
                    return redirect()->to('admin/dashboard/sosmed');
                } else {

                }

            }

            
        }
        
        $data['judul'] = 'Edit Sosmed';

        return view('admin/v_dashboard_admin_sosmed', $data);
    }


    

}