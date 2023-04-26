<?php

namespace App\Models;

use CodeIgniter\Model;

class modnota extends Model
{
    protected $table = "nota";
    protected $primaryKey = "id_nota";
    protected $allowedFields = ["id_service", "id_costumer", "id_staff", "total_harga", "id_status_nota"];
    // date time
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'create_at';
    protected $updatedField  = '';
    protected $deletedField  = '';

    public function getAll()
    {
        $builder = $this->db->table('nota');
        $builder->join('status_nota', 'status_nota.nama_status_nota = nota.id_status_nota');
        $query = $builder->get();
        $builder->select('*');
        return $query->getResult();
    }
}
