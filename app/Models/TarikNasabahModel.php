<?php

namespace App\Models;

use CodeIgniter\Model;


class TarikNasabahModel extends Model
{
    protected $table      = 'tarik_saldo';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user', 'jumlah', 'id_status_tarik'];

    protected $deleted_at = false;

    function cekUser($id_user)
    {
        return $this->db->table('tarik_saldo')
            ->where('id_user', $id_user)
            ->where('id_status_tarik', 1)
            ->countAllResults();
    }

    function cekJumlah($id_user)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('saldo');

        return $builder->select('total_saldo')
            ->where('user_id', $id_user)
            ->get()->getResultArray();
    }

    function tarikSaldo($id_user)
    {
        return $this->db->table('tarik_saldo')
            ->join('users', 'users.id = tarik_saldo.id_user')
            ->join('status_tarik', 'status_tarik.id = tarik_saldo.id_status_tarik')
            ->where('id_user', $id_user)
            ->get()->getResultArray();
    }
}
