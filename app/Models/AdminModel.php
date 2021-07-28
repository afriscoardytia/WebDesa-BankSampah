<?php

namespace App\Models;

use CodeIgniter\Model;


class AdminModel extends Model
{
    protected $table      = 'users';
    protected $useTimestamps = true;

    function join()
    {
        return $this->db->table('auth_groups_users')
            ->join('users', 'users.id = auth_groups_users.user_id')
            ->where('group_id', 3)
            ->get()->getResultArray();
    }

    function updateData($id)
    {
        $this->db->table('auth_groups_users')
            ->join('users', 'users.id = auth_groups_users.user_id')
            ->where('user_id', $id)
            ->set(['group_id' => 4])
            ->update();
    }

    function detailData($id)
    {
        return $this->db->table('auth_groups_users')
            ->join('users', 'users.id = auth_groups_users.user_id')
            ->where('group_id', 3)
            ->where('id', $id)
            ->get()->getResultArray();
    }
}
