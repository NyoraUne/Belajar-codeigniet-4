<?php

namespace App\Controllers;

class admin extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = session();
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
}
