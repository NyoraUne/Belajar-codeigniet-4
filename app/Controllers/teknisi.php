<?php

namespace App\Controllers;

class teknisi extends BaseController
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
        return view('tech/index');
    }
}
