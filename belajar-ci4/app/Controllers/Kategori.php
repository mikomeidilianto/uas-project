<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelKategori;

class Kategori extends BaseController
{
    public function __construct()
    {
        $this->ModelKategori = new ModelKategori();
    }
    
    //CRUD : READ
    public function index()
    {
        $data = [
            'judul' => 'Kategori',
            'page' => 'produk/v_kategori',
            'menu' => 'kategori',
            'kategori' => $this->ModelKategori->AllData(),
        ];
         return view('v_template', $data);
    }

    //CRUD : CREATE
    public function Tambah()
    {
        $data = [
            'judul' => 'Tambah Kategori',
            'page' => 'produk/v_tambahkategori',
            'menu' => 'kategori',
        ];
         return view('v_template', $data);
    }
}
