<?php

namespace App\Models;

use CodeIgniter\Model;


class DashboardAdminModel extends Model
{
    protected $table      = 'users';
    protected $useTimestamps = true;

    function tarik()
    {
        return $this->db->table('tarik_saldo')
            ->where('id_status_tarik', 1)
            ->countAllResults();
    }

    function jemput()
    {
        return $this->db->table('jemput_sampah')
            // ->where('id_status_tarik', 1)
            ->countAllResults();
    }

    function admin()
    {
        return $this->db->table('auth_groups_users')
            ->join('users', 'users.id = auth_groups_users.user_id')
            ->where('group_id', 3)
            ->countAllResults();
    }

    function nasabah()
    {
        return $this->db->table('auth_groups_users')
            ->join('users', 'users.id = auth_groups_users.user_id')
            ->where('group_id', 4)
            ->countAllResults();
    }
}
