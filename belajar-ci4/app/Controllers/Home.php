<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'page' => 'v_home',
            'menu' => 'dashboard',
        ];
         return view('v_template', $data);
    }
}
