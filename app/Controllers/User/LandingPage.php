<?php
namespace App\Controllers\User;

use App\Controllers\BaseController;

class LandingPage extends BaseController{

    function index(){
        $data = [];
        $data['judul'] = 'Website Desa Tejang';

        return view("user/v_user_landing_page", $data);
    }
    
}