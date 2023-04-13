<?php

namespace App\Controllers;

use app\Models\modcst;

class costumer extends BaseController
{

    protected $modcst;
    protected $validation;

    public function __construct()
    {
        $this->modcst = model(modcst::class);
        $this->validation = \Config\Services::validation();
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
    public function tbhwcst()
    {
        $modcst = new modcst();
        //tangkap data dari form 
        $data = $this->request->getPost();

        //jalankan validasi
        $this->validation->run($data, 'tbhcst');

        //cek errornya
        $errors = $this->validation->getErrors();

        //jika ada error kembalikan ke halaman register
        if ($errors) {
            session()->setFlashdata('error', $errors);
            return redirect()->to('/costumer/index');
        }

        $save = [
            'nama_costumer' => $this->request->getVar('nama_costumer'),
            'no_telp' => $this->request->getVar('no_telp'),
            'alamat' => $this->request->getVar('alamat'),
            'role' => 4
        ];
        $modcst->save($save);
        return redirect()->to('/costumer/index');
    }
    public function hapuscst($id_costumer)
    {
        $modcst = new modcst();

        $modcst->delete($id_costumer);
        return redirect()->to('/costumer/index');
    }
}
