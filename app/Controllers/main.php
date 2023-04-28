<?php

namespace App\Controllers;

class main extends BaseController
{
    public function index()
    {
        echo view('admin/head');
        echo view('admin/main');
        echo view('admin/foot');
    }
}
