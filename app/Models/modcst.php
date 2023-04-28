<?php

namespace App\Models;

use CodeIgniter\Model;

class modcst extends Model
{
    protected $table = "costumer";
    protected $primaryKey = "id_costumer";
    protected $allowedFields = ["nama_costumer", "no_telp", "alamat", "role", "create_at"];
    // date time
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'create_at';
    protected $updatedField  = '';
    protected $deletedField  = '';

    public function getAll()
    {
        $builder = $this->db->table('Costumer');
        $builder->join('role', 'role.id_role = costumer.role');
        $query = $builder->get();
        $builder->select('*');
        return $query->getResult();
    }
}
