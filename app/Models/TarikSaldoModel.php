<?php

namespace App\Models;

use CodeIgniter\Model;


class TarikSaldoModel extends Model
{
    protected $table      = 'users';
    protected $useTimestamps = true;

    function joinPengajuan()
    {
        return $this->db->table('tarik_saldo')
            ->join('users', 'users.id = tarik_saldo.id_user')
            ->where('id_status_tarik', 1)
            ->get()->getResultArray();
    }

    function joinRiwayat()
    {
        return $this->db->table('tarik_saldo')
            ->join('users', 'users.id = tarik_saldo.id_user')
            ->join('status_tarik', 'status_tarik.id = tarik_saldo.id_status_tarik')
            ->where('id_status_tarik !=', 1)
            ->get()->getResultArray();
    }

    function updateSetujui($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tarik_saldo');
        $builderr = $db->table('saldo');

        $satu = $builder->select('jumlah')
            ->where('id_user', $id)
            ->get()->getResultArray();

        $dua = $builderr->select('total_saldo')
            ->where('user_id', $id)
            ->get()->getResultArray();

        foreach ($satu as $s) {
            foreach ($dua as $d) {
                $kurangi = $d['total_saldo'] - $s['jumlah'];
            }
        }

        $this->db->table('tarik_saldo')
            ->where('id_user', $id)
            ->where('id_status_tarik', 1)
            ->set(['id_status_tarik' => 2])
            ->set(['id_admin' => user()->id])
            ->update();

        $this->db->table('saldo')
            ->where('user_id', $id)
            ->set(['total_saldo' => $kurangi])
            ->update();
    }

    function updatetolak($id)
    {
        $this->db->table('tarik_saldo')
            ->where('id_user', $id)
            ->where('id_status_tarik', 1)
            ->set(['id_status_tarik' => 3])
            ->set(['id_admin' => user()->id])
            ->update();
    }

    // function detailData($id)
    // {
    //     return $this->db->table('auth_groups_users')
    //         ->join('users', 'users.id = auth_groups_users.user_id')
    //         ->where('group_id', 3)
    //         ->where('id', $id)
    //         ->get()->getResultArray();
    // }
}
