<?php

namespace App\Controllers;

use app\Models\modbarang;
use app\Models\modkategori;

class admin extends BaseController
{
    protected $session;
    protected $modkategori;
    protected $modbarang;
    protected $validation;

    public function __construct()
    {
        $this->modkategori = model(modkategori::class);
        $this->session = session();
        $this->modbarang = model(modbarang::class);
        //meload validation
        $this->validation = \Config\Services::validation();
        //meload session
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        // cek apakah ada session bernama islogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('auth/login');
        }
        // cek role dari session
        if ($this->session->get('role') != 1) {
            return redirect()->to('/teknisi');
        }

        echo view('admin/head');
        echo view('admin/index');
        echo view('admin/foot');
    }
    public function databarang()
    {
        $datbar = new modbarang();
        $modkategori = new modkategori();

        $databarang = $datbar->getAll();
        $kategori = $modkategori->findAll();

        $data = [
            'datbar' => $databarang,
            'kategori' => $kategori,
        ];
        echo view('admin/head');
        echo view('admin/barang', $data);
        echo view('admin/foot');
    }
    public function editbar()
    {
        $datbar = new modbarang();

        $save = [
            'nama_barang' => $this->request->getVar('nama_barang'),
            'harga' => $this->request->getVar('harga'),
            'kategori' => $this->request->getVar('kategori')
        ];
        $datbar->update($this->request->getVar('id_barang_jasa'), $save);
        return redirect()->to('/admin/databarang');
    }

    public function tbhbarang()
    {
        $datbar = new modbarang();
        //tangkap data dari form 
        $data = $this->request->getPost();

        //jalankan validasi
        $this->validation->run($data, 'tbhdata');

        //cek errornya
        $errors = $this->validation->getErrors();

        //jika ada error kembalikan ke halaman register
        if ($errors) {
            session()->setFlashdata('error', $errors);
            return redirect()->to('/admin/databarang');
        }

        $save = [
            'nama_barang' => $this->request->getVar('nama_barang'),
            'harga' => $this->request->getVar('harga'),
            'kategori' => $this->request->getVar('kategori')
        ];
        $datbar->save($save);
        return redirect()->to('/admin/databarang');
    }
    public function hapusbarang($id_barang)
    {
        $datbar = new modbarang();
        $datbar->delete($id_barang);
        return redirect()->to('/admin/databarang');
    }
}
