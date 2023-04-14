<?php

namespace App\Controllers;

class Service extends BaseController
{
    public function index()
    {
        echo view('admin/head');
        echo view('service/index');
        echo view('admin/foot');
    }
}
