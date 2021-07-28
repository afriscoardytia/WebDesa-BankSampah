<?php

namespace App\Models;

use CodeIgniter\Model;

class SaldoModel extends Model
{
    protected $table      = 'saldo';
    protected $useTimestamps = true;
    protected $allowedFields = ['user_id', 'total_saldo'];

    protected $createdField  = false;
    protected $updatedField  = false;
    protected $deletedField  = false;

    function saldo($id_user)
    {
        return $this->db->table('saldo')
            ->where('user_id', $id_user)
            ->get()->getResultArray();
    }
}
