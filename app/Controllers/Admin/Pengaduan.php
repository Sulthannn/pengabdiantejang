<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PengaduanModel;

class Pengaduan extends BaseController{

    function __construct(){
        $this->m_pengaduan = new PengaduanModel();
        $this->validate =\Config\Services::validation();

    }

    function index(){
        $data = [];

        $data['pengaduans'] = $this->m_pengaduan->getData();

        if ($this->request->getMethod()=='get') {
            // Change Status to selesai
            if ($this->request->getGet('status') == 'selesai'){
                $record = [
                    'status_pengaduan' => 'selesai',
                    'id_pengaduan' => $this->request->getGet('id')
                ];

                $action = $this->m_pengaduan->insertData($record);

                if ($action) {
                    session()->setFlashdata('success', ['Status berhasil diubah']);
                    return redirect()->to('admin/dashboard/pengaduan');
                } else {
                    session()->setFlashdata('warning', ['Gagal mengubah status']);
                    return redirect()->to('admin/dashboard/pengaduan');
                }

            } elseif ($this->request->getGet('status') == 'proses') { //change status to proses
                $record = [
                    'status_pengaduan' => 'proses',
                    'id_pengaduan' => $this->request->getGet('id')
                ];

                $action = $this->m_pengaduan->insertData($record);

                if ($action) {
                    session()->setFlashdata('success', ['Status berhasil diubah']);
                    return redirect()->to('admin/dashboard/pengaduan');
                } else {
                    session()->setFlashdata('warning', ['Gagal mengubah status']);
                    return redirect()->to('admin/dashboard/pengaduan');
                }
            } elseif ($this->request->getGet('hapus') == 'true') {
                $idToDelete = $this->request->getGet('id');

                $dataToDelete = $this->m_pengaduan->getSingleData($idToDelete);
                $fileToDelete = $dataToDelete['file_pendukung'];

                if ($fileToDelete) {
                    @unlink(LOKASI_UPLOAD."/".$fileToDelete);
                }

                $action = $this->m_pengaduan->deleteData($idToDelete);

                if ($action) {
                    session()->setFlashdata('success', ['Berhasil menghapus Data']);
                    return redirect()->to('admin/dashboard/pengaduan');
                } else {
                    session()->setFlashdata('warning', ['Gagal menghapus data']);
                    return redirect()->to('admin/dashboard/pengaduan');
                }
            }
        }

        $data['judul'] = 'Website Desa Tejang | Pengaduan';
        $data['judulNav'] = 'Pengaduan';

        return view("admin/v_dashboard_admin_pengaduan", $data);
    }

    function detail($id_pengaduan){
        $data = [];

        $data['pengaduan'] = $this->m_pengaduan->getSingleData($id_pengaduan);

        if (empty($data['pengaduan'])) {
            return redirect()->to('admin/dashboard/pengaduan');
        }

        if ($this->request->getVar('submit_tanggapan') == null) {
            $data = $this->request->getVar(); 
            $rules = [
                'tanggapan_pengaduan' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Tanggapan Pengaduan'
                    ]
                ],     
            ];

            if (!$this->validate($rules)) {
                session()->setFlashdata('warning', $this->validate->getErrors());
            } else {
                $record=[
                    'tanggapan_pengaduan' => $this->request->getVar('tanggapan_pengaduan'),
                    'id_pengaduan' => $this->request->getVar('id_pengaduan'),
                ];

                $action = $this->m_pengaduan->insertData($record);

                if ($action != false) {

                    $email_tujuan = $this->request->getVar('email_pengadu');
                    $subject = "Tanggapan Pengaduan Website Desa Tejang";
                    $pesan = $this->request->getVar('tanggapan_pengaduan');

                    $email = service('email');
                    $email->setTo($email_tujuan);
                    $email->setFrom('arih2017arih@gmail.com', 'Desa Tejang');

                    $email->setSubject($subject);
                    $email->setMessage($pesan);

                    if ($email->send()) {
                        session()->setFlashdata('success', ['Berhasil menginputkan data & mengirim tanggapan']);
                        return redirect()->to('admin/dashboard/pengaduan');
                    } else {
                        $data = $email->printDebugger(['headers']);
                        session()->setFlashdata('warning', [$data]);
                        return redirect()->to('admin/dashboard/pengaduan/');
                    }

                } else {
                    session()->setFlashdata('warning', ['Gagal menginputkan data']);
                    return redirect()->to('admin/dashboard/pengaduan/');
                }
            }

        }

        $data['judul'] = 'Website Desa Tejang | Pengaduan';
        $data['judulNav'] = 'Pengaduan';
        $data['pengaduan'] = $this->m_pengaduan->getSingleData($id_pengaduan);


        return view("admin/v_dashboard_admin_detail_pengaduan", $data);

    }

}