<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('admin/head');
        echo view('admin/main');
        echo view('admin/foot');
    }
}
