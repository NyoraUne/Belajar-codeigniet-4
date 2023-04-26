<?php

namespace App\Controllers;

use app\Models\modbarang;
use app\Models\modcst;
use app\Models\modservice;
use app\Models\modnota;

class penjualan extends BaseController
{
    protected $modnota;
    protected $modbarang;
    protected $session;
    protected $modcst;
    protected $modservice;

    public function __construct()
    {
        $this->modnota = model(modnota::class);
        $this->modservice = model(modservice::class);
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

        $modservice = new modservice();
        $service = $modservice->getAll();

        $modnota = new modnota();
        $nota = $modnota->getAll();

        $data = [
            'listbarang' => $barang,
            'cst' => $cst,
            'service' => $service,
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
