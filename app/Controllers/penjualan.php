<?php

namespace App\Controllers;

use app\Models\modbarang;
use app\Models\modcst;

class penjualan extends BaseController
{
    protected $modbarang;
    protected $session;
    protected $modcst;
    public function __construct()
    {
        $this->session = session();
        $this->modcst = model(modcst::class);
        $this->modbarang = model(modbarang::class);
    }
    public function index()
    {
        $modbarang = new modbarang();
        $barang = $modbarang->getAll();

        $modcst = new modcst();
        $cst = $modcst->getAll();

        $data = [
            'listbarang' => $barang,
            'cst' => $cst,
        ];
        // dd($data);


        echo view('admin/head');
        echo view('penjualan/index', $data);
        echo view('admin/foot');
    }
    public function tes()
    {
        echo view('tes');
    }
}
