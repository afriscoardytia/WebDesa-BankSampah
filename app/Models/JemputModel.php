<?php

namespace App\Models;

use CodeIgniter\Model;

class JemputModel extends Model
{
    protected $table      = 'jemput_sampah';
    protected $useTimestamps = true;

    function join()
    {
        return $this->db->table('jemput_sampah')
            ->join('users', 'users.id = jemput_sampah.id_user')
            // ->where('group_id', 3)
            ->get()->getResultArray();
    }
}
