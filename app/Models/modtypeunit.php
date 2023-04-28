<?php

namespace App\Models;

use CodeIgniter\Model;

class modtypeunit extends Model
{
    protected $table = "type_unit";
    protected $primaryKey = "id_type_unit";
    protected $allowedFields = ["type_unit"];
    // date time
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'create_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
