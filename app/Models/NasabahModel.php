<?php

namespace App\Models;

use CodeIgniter\Model;


class NasabahModel extends Model
{
    protected $table      = 'users';
    protected $useTimestamps = true;

    function join()
    {
        return $this->db->table('auth_groups_users')
            ->join('users', 'users.id = auth_groups_users.user_id')
            ->where('group_id', 4)
            ->get()->getResultArray();
    }

    function detailData($id)
    {
        return $this->db->table('auth_groups_users')
            ->join('users', 'users.id = auth_groups_users.user_id')
            ->where('group_id', 4)
            ->where('id', $id)
            ->get()->getResultArray();
    }

    function updateData($id)
    {
        $this->db->table('auth_groups_users')
            ->join('users', 'users.id = auth_groups_users.user_id')
            ->where('user_id', $id)
            ->set(['group_id' => 3])
            ->update();
    }
}
