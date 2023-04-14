<?php

namespace App\Models;

use CodeIgniter\Model;

class modservice extends Model
{
    protected $table = "costumer";
    protected $primaryKey = "id_costumer";
    protected $allowedFields = [
        "id_service",
        "id_costumer",
        "tgl_terima",
        "id_type_unit",
        "nama_unit",
        "seral_unit",
        "id_admin",
        "id_teknisi",
        "problem_service",
        "catatan_service",
        "kelengkapan_service"
    ];

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
