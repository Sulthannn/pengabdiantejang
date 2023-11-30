<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController{

    function index(){
        $data = [];
        $data['judul'] = 'Dashboard Admin';

        return view("admin/v_dashboard_admin", $data);
    }
    
}