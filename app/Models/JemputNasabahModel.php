<?php

namespace App\Models;

use CodeIgniter\Model;

class JemputNasabahModel extends Model
{
    protected $table      = 'jemput_sampah';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user'];

    protected $updatedField  = false;
    protected $deletedField  = false;

    function join($id_user)
    {
        return $this->db->table('jemput_sampah')
            ->join('users', 'users.id = jemput_sampah.id_user')
            ->where('id_user', $id_user)
            ->get()->getResultArray();
    }
}
