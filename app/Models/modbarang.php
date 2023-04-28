<?php

namespace App\Models;

use CodeIgniter\Model;

class modbarang extends Model
{
    protected $table = "barang_jasa";
    protected $primaryKey = "id_barang_jasa";
    protected $allowedFields = ["kategori", "nama_barang", "harga", "gambar", "create_at", "update_at"];
    // date time
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'create_at';
    protected $updatedField  = 'update_at';
    protected $deletedField  = '';

    public function getAll()
    {
        $builder = $this->db->table('barang_jasa');
        $builder->join('kategori', 'kategori.id_kategori = barang_jasa.kategori');
        $query = $builder->get();
        $builder->select('*');
        return $query->getResult();
    }
}
