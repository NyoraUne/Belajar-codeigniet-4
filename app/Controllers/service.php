<?php

namespace App\Controllers;

use app\Models\modcst;
use app\Models\modservice;
use app\Models\modstaf;
use app\Models\modtypeunit;

class Service extends BaseController
{
    protected $modcst;
    protected $session;
    protected $modservice;
    protected $modstaf;
    protected $modtypeunit;

    public function __construct()
    {

        $this->modtypeunit = model(modtypeunit::class);
        $this->modstaf = model(modstaf::class);
        $this->modservice = model(modservice::class);
        $this->modcst = model(modcst::class);
        $this->session = session();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $modstaf = new modstaf();
        $teknisi = $modstaf->where('role', 2)->findAll();

        $modcst = new modcst();
        $datacst = $modcst->getAll();

        $modtypeunit = new modtypeunit();
        $typeunit = $modtypeunit->findAll();

        $modservice = new modservice();
        $service = $modservice->getAll();
        // dd($service);

        $data = [
            'costumer' => $datacst,
            'teknisi' => $teknisi,
            'typeunit' => $typeunit,
            'service' => $service,
        ];
        echo view('admin/head');
        echo view('service/index', $data);
        echo view('admin/foot');
    }
    public function tbhservice()
    {
        $modservice = new modservice();
        //tangkap data dari form 
        $data = $this->request->getPost();

        //jalankan validasi
        // $this->validation->run($data, 'tbhcst');

        //cek errornya
        // $errors = $this->validation->getErrors();

        //jika ada error kembalikan ke halaman register
        // if ($errors) {
        //     session()->setFlashdata('error', $errors);
        //     return redirect()->to('/costumer/index');
        // }
        $save = [
            'id_costumer' => $this->request->getVar('id_costumer'),
            'tgl_terima' => $this->request->getVar('tgl_terima'),
            'id_type_unit' => $this->request->getVar('id_type_unit'),
            'nama_unit' => $this->request->getVar('nama_unit'),
            'serial_unit' => $this->request->getVar('serial_unit'),
            'id_admin' => $this->request->getVar('id_admin'),
            'id_teknisi' => $this->request->getVar('id_teknisi'),
            'problem_service' => $this->request->getVar('problem_service'),
            'catatan_service' => $this->request->getVar('catatan_service'),
            'kelengkapan_service' => $this->request->getVar('kelengkapan_service'),
            'id_status_service' => 1,
        ];
        // dd($save);
        $modservice->save($save);
        return redirect()->to('/service/index');
    }
}
