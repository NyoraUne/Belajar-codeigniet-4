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

        // dd($service);
        $data = [
            'listbarang' => $barang,
            'cst' => $cst,
            'service' => $service,
            'nota' => $nota,
        ];
        // dd($data);

        echo view('admin/head');
        echo view('penjualan/index', $data);
        echo view('admin/foot');
    }
    public function simpnota()
    {
        $modnota = new modnota();
        $id_service = $this->request->getVar('id_service');
        if ($id_service == '') {
            $save = [
                'id_service' => null,
                'id_costumer' => $this->request->getVar('id_costumer'),
                'id_staff' => $this->request->getVar('id_staff'),
                'id_status_nota' => 1,
            ];
        } else {
            $save = [
                'id_service' => $id_service,
                'id_costumer' => $this->request->getVar('id_costumer'),
                'id_staff' => $this->request->getVar('id_staff'),
                'id_status_nota' => 1,
            ];
        }

        // dd($save);
        $modnota->set($save)->insert();
        // $modnota->save($save);
        return redirect()->to('/penjualan/index');
    }
}
