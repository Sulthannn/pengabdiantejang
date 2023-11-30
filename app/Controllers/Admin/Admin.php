<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Admin extends BaseController
{
    function __construct(){
        $this->m_admin = new AdminModel();
        $this->validate = \Config\Services::Validation();
        helper("cookie");
    }

    public function login(){
        $data = [];

        if($this->request->getMethod()=='post'){
            $rules = [
                'username' => [
                    'rules' => 'required',
                    'errors' => [
                        'required'=>'Username harus diisi'
                    ]
                ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required'=>'Password harus diisi'
                    ],
                ],
            ];

            if (!$this->validate($rules)) {
                session()->setFlashdata("warning", $this->validate->getErrors());
                return redirect()->to("admin/login");
            }

            $username = str_replace("'", "", htmlspecialchars($this->request->getVar('username'), ENT_QUOTES));
            $password = str_replace("'", "", htmlspecialchars($this->request->getVar('password'), ENT_QUOTES));
            // $remember_me = $this->request->getVar('remember_me');

            $dataAdmin = $this->m_admin->getData($username);

            if(!password_verify($password, $dataAdmin['password'])){
                $err[] = 'Username atau password salah';
                session()->setFlashdata('warning', $err);
                return redirect()->to("admin/login");
            }

            $admin = [
                'login_status'=>true,
                'admin_username'=>$dataAdmin['username'],
                'admin_full_name'=>$dataAdmin['full_name'],
                'admin_email' => $dataAdmin['email'],
                'admin_last_login' => $dataAdmin['last_login']
            ];

            session()->set($admin);
            return redirect()->to('admin/dashboard');
        }
        return view("admin/v_login", $data );
    }
 
    function logout(){
        delete_cookie('cookie_username');
        delete_cookie('cookie_password');
        session()->destroy();

        if (session()->get('admin_username') != '') {
            $scs[] = "Sampai Jumpa Kembali :)";
            session()->setFlashdata("success", $scs);
        }
        return redirect()->to('admin/login');

    }

}

?>