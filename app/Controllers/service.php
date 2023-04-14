<?php

namespace App\Controllers;

use app\Models\modcst;

class Service extends BaseController
{
    protected $modcst;
    protected $session;

    public function __construct()
    {
        $this->modcst = model(modcst::class);
        $this->session = session();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $modcst = new modcst();
        $datacst = $modcst->getAll();

        $data = [
            'costumer' => $datacst,
        ];
        echo view('admin/head');
        echo view('service/index', $data);
        echo view('admin/foot');
    }
}
