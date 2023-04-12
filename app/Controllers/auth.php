<?php

namespace App\Controllers;

use App\Models\modstaf;

class Auth extends BaseController
{
    protected $modstaf;
    protected $validation;
    protected $session;
    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->modstaf = new modstaf();

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        //menampilkan halaman login

        echo view('auth/head');
        return view('auth/login');
        echo view('auth/foot');
    }

    public function register()
    {
        //menampilkan halaman register

        echo view('auth/head');
        echo view('auth/register');
        echo view('auth/foot');
    }

    public function valid_register()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();

        //jalankan validasi
        $this->validation->run($data, 'register');

        //cek errornya
        $errors = $this->validation->getErrors();

        //jika ada error kembalikan ke halaman register
        if ($errors) {
            session()->setFlashdata('error', $errors);
            return redirect()->to('/auth/register');
        }

        //jika tdk ada error 

        //buat salt
        $salt = uniqid('', true);

        //hash password digabung dengan salt
        $password = md5($data['password']) . $salt;

        //get email
        $email = $this->request->getVar('email');

        //masukan data ke database
        $this->modstaf->save([
            'nama' => $data['nama'],
            'email' => $email,
            'password' => $password,
            'salt' => $salt,
            'role' => 1
        ]);

        //arahkan ke halaman login
        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('/auth/login');
    }

    public function valid_login()
    {
        //ambil data dari form
        $data = $this->request->getPost();

        //ambil data user di database yang usernamenya sama 
        $user = $this->modstaf->where('nama', $data['nama'])->first();

        //cek apakah username ditemukan
        if ($user) {
            //cek password
            //jika salah arahkan lagi ke halaman login
            if ($user['password'] != md5($data['password']) . $user['salt']) {
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('/auth/login');
            } else {
                //jika benar, arahkan user masuk ke aplikasi 
                $sessLogin = [
                    'isLogin' => true,
                    'nama' => $user['nama'],
                    'role' => $user['role']
                ];
                $this->session->set($sessLogin);
                return redirect()->to('/admin');
            }
        } else {
            //jika username tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('nama', 'Username tidak ditemukan');
            return redirect()->to('/auth/login');
        }
    }

    public function logout()
    {
        //hancurkan session 
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to('/auth/login');
    }
}
