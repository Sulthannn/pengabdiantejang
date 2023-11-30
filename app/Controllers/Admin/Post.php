<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PostsModel;
use App\Models\KategoriModel;

class Post extends BaseController{

    function __construct(){
        $this->validate =\Config\Services::validation();
        $this->m_post = new PostsModel();
        $this->m_categories = new KategoriModel();
    }

    function index(){
        $data = [];

        if ($this->request->getVar('action') == 'delete_post' &&$this->request->getVar('id_post') ) {
            $dataPost = $this->m_post->getSinglePost($this->request->getVar('id_post'));

            if($dataPost['id_post']){
                @unlink(LOKASI_UPLOAD."/".$dataPost['post_thumb']);
                $action =$this->m_post->deletePost($this->request->getVar('id_post'));
                if ($action) {
                    session()->setFlashdata('success', ["Berhasil menghapus post"]);
                    return redirect()->to('admin/dashboard/posts');
                } else {
                    session()->setFlashdata('warning', ["Gagal Menghapus Post"]);
                }
            }
        }

        $data['judul'] = "Posts";

        $keyword = "";

        $list_post = $this->m_post->ListPosts($keyword);
        
        $data['record'] = $list_post['record'];

        return view('admin/v_dashboard_admin_posts', $data);
    }

    function tambahPost(){
        $data = [];

        if ($this->request->getMethod()=='post') {
            $data = $this->request->getVar(); 
            $rules = [
                'post_title' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Judul'
                    ]
                ],   
                'post_status' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Status'
                    ]
                ],   
                'post_type' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Tipe'
                    ]
                ],   
                'post_content' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Isi'
                    ]
                ],   
                'post_description' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Deskripsi'
                    ]
                ],   
                'post_thumb' => [
                    'rules' => 'is_image[post_thumb]',
                    'errors' =>[
                        'is_image' => 'Mohon masukkan sesuai ekstensi yang valid'
                    ]
                ],   
                'kategori_id' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom kategori'
                    ]
                ],   
            ];

            $file = $this->request->getFile('post_thumb');

            if (!$this->validate($rules)) {
                session()->setFlashdata('warning', $this->validate->getErrors());
            } else {
                $post_thumb = '';
                if ($file->getName()) {
                    $post_thumb = $file->getRandomName();
                }
                
                $post_content = $this->request->getVar('post_content');
                

                $record=[
                    'post_title' => $this->request->getVar('post_title'),
                    'post_status' => $this->request->getVar('post_status'),
                    'post_description' => $this->request->getVar('post_description'),
                    'post_content' => $post_content,
                    'post_type' => $this->request->getVar('post_type'),
                    'post_thumb' => $post_thumb,
                    'kategori_id' => $this->request->getVar('kategori_id'),
                ];

                $action = $this->m_post->insertPost($record);

                if ($action != false) {
                    $page_id = $action;
                    if ($file->getName()) {
                        $file->move(LOKASI_UPLOAD, $post_thumb);
                    }

                    session()->setFlashdata('success', ['Berhasil menginputkan data']);
                    return redirect()->to('admin/dashboard/posts');
                } else {
                    session()->setFlashdata('warning', ['Gagal menginputkan data']);
                    return redirect()->to('admin/dashboard/posts/create');
                }
            }

        }

        $data['categories'] = $this->m_categories->getData();
        $data['judul'] = "Posts";

        return view('admin/v_dashboard_admin_posts_create', $data);
    }

    function editPost($id_post){
        $data = [];

        $dataPost = $this->m_post->getSinglePost($id_post);

        if (empty($dataPost)) {
            return redirect()->to('admin/dashboard/posts');
        }

        $data = $dataPost;

        if ($this->request->getMethod()=='post') {
            $data = $this->request->getVar(); 
            $rules = [
                'post_title' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Judul'
                    ]
                ],   
                'post_status' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Status'
                    ]
                ],   
                'post_type' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Tipe'
                    ]
                ],  
                'post_content' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Isi'
                    ]
                ],   
                'post_description' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom Deskripsi'
                    ]
                ],   
                'post_thumb' => [
                    'rules' => 'is_image[post_thumb]',
                    'errors' =>[
                        'is_image' => 'Mohon masukkan sesuai ekstensi yang valid'
                    ]
                ],   
                'kategori_id' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'Harap isi kolom kategori'
                    ]
                ],   
            ];

            $file = $this->request->getFile('post_thumb');

            if (!$this->validate($rules)) {
                session()->setFlashdata('warning', $this->validate->getErrors());
            } else {
                $post_thumb = $dataPost['post_thumb'];
                if ($file->getName()) {
                    $post_thumb = $file->getRandomName();
                }
                $record=[
                    'post_title' => $this->request->getVar('post_title'),
                    'post_status' => $this->request->getVar('post_status'),
                    'post_description' => $this->request->getVar('post_description'),
                    'post_content' => $this->request->getVar('post_content'),
                    'kategori_id' => $this->request->getVar('kategori_id'),
                    'post_type' => $this->request->getVar('post_type'),
                    'post_thumb' => $post_thumb,
                    'id_post' => $id_post,
                ];

                $action = $this->m_post->insertPost($record);

                if ($action != false) {
                    $page_id = $action;
                    if ($file->getName()) {
                        if ($dataPost['post_thumb']) {
                            @unlink(LOKASI_UPLOAD."/".$dataPost['post_thumb']);
                        }
                        $file->move(LOKASI_UPLOAD, $post_thumb);
                    }

                    session()->setFlashdata('success', ['Berhasil menginputkan data']);
                    return redirect()->to('admin/dashboard/posts');
                } else {
                    session()->setFlashdata('warning', ['Gagal menginputkan data']);
                    return redirect()->to('admin/dashboard/posts/create');
                }
            }

        }


        $data['categories'] = $this->m_categories->getData();
        $data['judul'] = "Posts";

        return view('admin/v_dashboard_admin_posts_create', $data);
    }

    function deletePost($id_post){
        $data = [];

        // Karena ada dari yang ckeditor. Kalau ngehapus post, coba buat modul untuk ngehapus gambar dickeditor nya

        // Logic : If(containt src, ambil src nya. if exist file, hapus file nya...)

        $data['judul'] = "Posts";

        return view('admin/v_dashboard_admin_posts_create', $data);
    }

    function kategoriPost(){
        $data = [];

        $rules = [
            'kategori' => [
                'rules' => 'required',
                'errors' =>[
                    'required' => 'Harap isi kolom Kategori'
                ]
            ],   
            'deskripsi_kategori' => [
                'rules' => 'required',
                'errors' =>[
                    'required' => 'Harap isi kolom Deskripsi Kategori'
                ]
            ],
        ];

        if ($this->request->getPost('tambah_kategori')) {

            if (!$this->validate($rules)) {
                session()->setFlashdata('warning', $this->validate->getErrors());
            } else {
                $record = [
                    'kategori' => $this->request->getPost('kategori'),
                    'deskripsi' => $this->request->getPost('deskripsi_kategori'),
                ];
    
                $action = $this->m_categories->insertKategori($record);
    
                if ($action !== false) {
                    session()->setFlashdata('success', ['Berhasil menginputkan data']);
                    return redirect()->to('admin/dashboard/kategori');
                } else {
    
                }

            }
            
        }

        if ($this->request->getGet('edit_kategori')) {
            $idToEdit = $this->request->getGet('edit_kategori');

            $singleKategori = $this->m_categories->getSingleKategori($idToEdit);
            $data['kategori_to_edit'] = $singleKategori;
        }

        if ($this->request->getPost('edit_kategori')) {

            if (!$this->validate($rules)) {
                session()->setFlashdata('warning', $this->validate->getErrors());
            } else {
                $idToEdit = $this->request->getPost('id_kategori');
                $record = [
                    'kategori' => $this->request->getPost('kategori'),
                    'deskripsi' => $this->request->getPost('deskripsi_kategori'),
                    'id_kategori' => $this->request->getPost('id_kategori'),
                ];

                $action = $this->m_categories->insertKategori($record);

                if ($action !== false) {
                    session()->setFlashdata('success', ['Berhasil mengedit kategori']);
                    return redirect()->to('admin/dashboard/kategori');
                } else {

                }

            }
            
        }

        if ($this->request->getGet('action') && $this->request->getGet('id_kategori_to_delete')) {
            $idToDelete = $this->request->getGet('id_kategori_to_delete');

            $dataKategoriToDelete = $this->m_categories->getSingleKategori($idToDelete);

            if($dataKategoriToDelete['id_kategori']){
                $action = $this->m_categories->deleteKategori($dataKategoriToDelete['id_kategori']);
                session()->setFlashdata('success', ["Berhasil menghapus kategori"]);
                return redirect()->to('admin/dashboard/kategori');
            } else {
                session()->setFlashdata('warning', ["Gagal Menghapus kategori"]);
                return redirect()->to('admin/dashboard/kategori');
            }

        }

        $data['kategori'] = $this->m_categories->getData();
        $data['judul'] = "Posts";

        return view('admin/v_dashboard_admin_kategori', $data);
    }

}