<?php

namespace App\Models;

use CodeIgniter\Model;

class modstaf extends Model
{
    protected $table = "staf";
    protected $primaryKey = "id_staf";
    protected $allowedFields = ["nama", "email", "password", "foto", "salt", "role", "create_at"];
    // date time
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'create_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
