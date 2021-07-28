<?php

namespace App\Models;

use CodeIgniter\Model;


class SetorSampahModel extends Model
{
    protected $table      = 'transaksi';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_admin', 'id_user', 'id_sampah', 'jumlah', 'harga'];
    protected $updatedField  = false;
    protected $deletedField  = false;

    function dataSampah()
    {
        return $this->db->table('sampah')
            ->get()->getResultArray();
    }

    function dataUser()
    {
        return $this->db->table('auth_groups_users')
            ->join('users', 'users.id = auth_groups_users.user_id')
            ->get()->getResultArray();
    }

    function dataRiwayat()
    {
        return $this->db->table('transaksi')
            ->join('users', 'users.id = transaksi.id_user')
            ->join('sampah', 'sampah.id = transaksi.id_sampah')
            ->get()->getResultArray();
    }

    function updateHarga($id, $total)
    {
        $db      = \Config\Database::connect();
        $builderr = $db->table('saldo');

        $dua = $builderr->select('total_saldo')
            ->where('user_id', $id)
            ->get()->getResultArray();

        foreach ($dua as $d) {
            $tambah = $d['total_saldo'] + $total;
        }

        $this->db->table('saldo')
            ->where('user_id', $id)
            ->set(['total_saldo' => $tambah])
            ->update();
    }

    // function detailData($id)
    // {
    //     return $this->db->table('auth_groups_users')
    //         ->join('users', 'users.id = auth_groups_users.user_id')
    //         ->where('group_id', 4)
    //         ->where('id', $id)
    //         ->get()->getResultArray();
    // }

    // function updateData($id)
    // {
    //     $this->db->table('auth_groups_users')
    //         ->join('users', 'users.id = auth_groups_users.user_id')
    //         ->where('user_id', $id)
    //         ->set(['group_id' => 3])
    //         ->update();
    // }
}
