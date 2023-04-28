<?php

namespace App\Models;

use CodeIgniter\Model;

class modkategori extends Model
{
    protected $table = "kategori";
    protected $primaryKey = "id_kategoi";
    protected $allowedFields = ["nama_kategori"];
    // date time
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'create_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
