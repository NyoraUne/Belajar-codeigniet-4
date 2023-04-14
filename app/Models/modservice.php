<?php

namespace App\Models;

use CodeIgniter\Model;

class modservice extends Model
{
    protected $table = "service";
    protected $primaryKey = "id_service";
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
        "kelengkapan_service",
        "id_status_service",
    ];

    // date time
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'create_at';
    protected $updatedField  = '';
    protected $deletedField  = '';

    public function getAll()
    {
        $builder = $this->db->table('service');
        $builder->join('costumer', 'costumer.id_costumer = service.id_costumer');
        $builder->join('staf as admin', 'admin.id_staf = service.id_admin');
        $builder->join('staf as teknisi', 'teknisi.id_staf = service.id_teknisi');
        $builder->join('type_unit', 'type_unit.id_type_unit = service.id_type_unit');
        $builder->join('status_service', 'status_service.id_status_service = service.id_status_service');
        $builder->select('*');
        $builder->select('service.*, admin.nama as nama_admin, teknisi.nama as nama_teknisi');
        $query = $builder->get();
        return $query->getResult();
    }
    // public function getAll()
    // {
    //     $builder = $this->db->table('service');
    //     $builder->join('costumer', 'costumer.id_costumer = service.id_costumer');
    //     $builder->join('staf as admin', 'admin.id_staf = service.id_admin');
    //     $builder->join('staf as teknisi', 'teknisi.id_staf = service.id_teknisi');
    //     $builder->join('type_unit', 'type_unit.id_type_unit = service.id_type_unit');
    //     $builder->join('status_service', 'status_service.id_status_service = service.id_status_service');
    //     $query = $builder->get();
    //     $builder->select('*');
    //     $builder->select('service.*, admin.nama as nama_admin, teknisi.nama as nama_teknisi');
    //     return $query->getResult();
    // }
}
