<?php

namespace App\Controllers;

class penjualan extends BaseController
{
    public function index()
    {
        echo view('admin/head');
        echo view('penjualan/index');
        echo view('admin/foot');
    }
}
