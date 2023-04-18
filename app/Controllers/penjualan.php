<?php

namespace App\Controllers;

use app\Models\modbarang;

class penjualan extends BaseController
{
    protected $modbarang;
    protected $session;
    public function __construct()
    {
        $this->session = session();
        $this->modbarang = model(modbarang::class);
    }
    public function index()
    {
        $modbarang = new modbarang();
        $barang = $modbarang->getAll();

        $data = [
            'listbarang' => $barang,
        ];
        // dd($data);


        echo view('admin/head');
        echo view('penjualan/index', $data);
        echo view('admin/foot');
    }
}
