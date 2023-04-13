<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    public $register = [
        'nama' => 'alpha_numeric|is_unique[staf.nama]',
        'email' => 'required|is_unique[staf.email]',
        'password' => 'min_length[8]|alpha_numeric_punct',
        'confirm' => 'matches[password]'
    ];

    public $register_errors = [
        'nama' => [
            'alpha_numeric' => 'Username hanya boleh mengandung huruf dan angka',
            'is_unique' => 'Username sudah dipakai'
        ],
        'email' => [
            'required' => 'Email harus di isi',
            'is_unique' => 'Email sudah dipakai'
        ],
        'password' => [
            'min_length' => 'Password harus terdiri dari 8 kata',
            'alpha_numeric_punct' => 'Password hanya boleh mengandung angka, huruf, dan karakter yang valid'
        ],
        'confirm' => [
            'matches' => 'Konfirmasi password tidak cocok'
        ]
    ];

    public $tbhdata = [
        'kategori' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kategori Barang Harus Di Isi',
            ]
        ],
        'nama_barang' => [
            'rules' => 'required|is_unique[barang_jasa.nama_barang]',
            'errors' => [
                'required' => 'Nama Barang Harus Di Isi',
                'is_unique' => 'Nama Barang Sudah Ada'
            ]
        ],
        'harga' => [
            'rules' => 'required|integer',
            'errors' => [
                'required' => 'Harga Barang Harus Di Isi',
                'integer' => 'Harga Barang Harus Angka'
            ]
        ],
    ];
    public $tbhcst = [
        'nama_costumer' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Costumer Harus Di Isi',
            ]
        ],
        'no_telp' => [
            'rules' => 'required|integer|is_unique[costumer.no_telp]',
            'errors' => [
                'required' => 'Nama Barang Harus Di Isi',
                'integer' => 'No Telphone Harus Angka',
                'is_unique' => 'No Telphone Sudah Ada',
            ]
        ],
        'alamat' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Alamat Harus Di Isi',
            ]
        ],
    ];
}
