<?php

namespace App\Controllers;

use app\Models\modcst;

class costumer extends BaseController
{

    protected $modcst;

    public function __construct()
    {
        $this->modcst = model(modcst::class);
    }

    public function index()
    {
        $modcst = new modcst();
        $datacst = $modcst->getAll();
        // dd($datacst);
        $data = [
            'datacst' => $datacst,
        ];
        echo view('admin/head');
        echo view('costumer/index', $data);
        echo view('admin/foot');
    }
    public function viewcst()
    {
    }
}
