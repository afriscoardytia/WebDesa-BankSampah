<?php

namespace App\Controllers;

use App\Models\TarikNasabahModel;
use App\Models\JemputNasabahModel;
use App\Models\DataUserModel;
use App\Models\SaldoModel;

class User extends BaseController
{
    protected $tarikNasabahModel;
    protected $jemputNasabahModel;
    protected $dataUserModel;
    protected $saldoModel;

    public function __construct()
    {
        $this->tarikNasabahModel = new TarikNasabahModel();
        $this->jemputNasabahModel = new JemputNasabahModel();
        $this->dataUserModel = new DataUserModel();
        $this->saldoModel = new SaldoModel();
        $this->req = \Config\Services::request();
    }
    public function index()
    {
        $id_user = user()->id;
        $data_user =  $this->dataUserModel->find($id_user);

        $t_saldo = $this->saldoModel->saldo($id_user);

        $data = [
            'title' => 'Nasabah | Bank Sampah | Desa Manyarejo',
            'data_user' => $data_user,
            't_saldo' => $t_saldo
        ];
        return view('user/index', $data);
    }

    public function updateDataUser($id)
    {

        // if (!$this->validate([
        //     'nama_sampah' => [
        //         'rules' => "required|is_unique[sampah.nama_sampah,id,{$id}]",

        //         'errors' => [
        //             'required' => '{field} harus diisi.',
        //             'is_unique' => '{field} sudah ada.'
        //         ]
        //     ]
        // ])) {
        //     return redirect()->to('/admin/updateDataSampah/' . $this->req->getVar('id'))->withInput();
        // }

        $this->saldoModel->save([
            'user_id' => $id,
            'total_saldo' => 0
        ]);

        $this->dataUserModel->save([
            'id' => $id,
            'nama' => $this->req->getVar('nama'),
            'jenis_kelamin' => $this->req->getVar('jenis_kelamin'),
            'no_hp' => $this->req->getVar('no_hp'),
            'alamat' => $this->req->getVar('alamat'),
            'rt' => $this->req->getVar('rt'),
            'rw' => $this->req->getVar('rw')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/user/index');
    }

    public function pengajuanTarikNasabah()
    {
        $id_user = user()->id;
        $data_user =  $this->dataUserModel->find($id_user);

        $cek = $this->tarikNasabahModel->cekUser($id_user);
        $saldo = $this->tarikNasabahModel->cekJumlah($id_user);


        $data = [
            'title' => 'Pengajuan | Tarik Saldo Nasabah | Bank Sampah | Desa Manyarejo',
            'cek' => $cek,
            'saldo' => $saldo,
            'data_user' => $data_user
        ];
        return view('user/create-pengajuan-tarik-nasabah', $data);
    }

    public function save()
    {
        $id_user = user()->id;
        $jumlah_tarik = $this->req->getVar('jumlah');
        $saldo = $this->tarikNasabahModel->cekJumlah($id_user);
        foreach ($saldo as $s) {
            if ($jumlah_tarik > (int)$s['total_saldo']) {
                session()->setFlashdata('pesan', 'Total saldo tidak mencukupi.');
                return redirect()->to('/user/pengajuanTarikNasabah');
            } else if ($jumlah_tarik <= (int)$s['total_saldo']) {
                $this->tarikNasabahModel->save([
                    'id_user' => user()->id,
                    'jumlah' => $jumlah_tarik,
                    'id_status_tarik' => 1
                ]);
                session()->setFlashdata('pesan', 'Pengajuan Berhasil.');
                return redirect()->to('/user/pengajuanTarikNasabah');
            }
        }
    }

    public function riwayatTarikNasabah()
    {
        $id_user = user()->id;
        $data_user =  $this->dataUserModel->find($id_user);
        $saldo = $this->tarikNasabahModel->tarikSaldo($id_user);
        $data = [
            'title' => 'Riwayat | Tarik Saldo Nasabah | Bank Sampah | Desa Manyarejo',
            'saldo' => $saldo,
            'data_user' => $data_user
        ];
        return view('user/read-riwayat-tarik-nasabah', $data);
    }

    public function pengajuanJemputNasabah()
    {
        $id_user = user()->id;
        $data_user =  $this->dataUserModel->find($id_user);
        $data = [
            'title' => 'Pengajuan | Jemput Sampah | Bank Sampah | Desa Manyarejo',
            'data_user' => $data_user
        ];
        return view('user/create-pengajuan-jemput-nasabah', $data);
    }

    public function simpan()
    {
        $id_user = user()->id;
        $this->jemputNasabahModel->save([
            'id_user' => $id_user
        ]);
        session()->setFlashdata('pesan', 'Pengajuan Jemput Sampah Berhasil.');
        return redirect()->to('/user/pengajuanJemputNasabah');
    }

    public function riwayatJemputNasabah()
    {
        $id_user = user()->id;
        $data_user =  $this->dataUserModel->find($id_user);
        $riwayat = $this->jemputNasabahModel->join($id_user);

        $data = [
            'title' => 'Riwayat | Jemput Sampah | Bank Sampah | Desa Manyarejo',
            'riwayat' => $riwayat,
            'data_user' => $data_user
        ];
        return view('user/read-riwayat-jemput-nasabah', $data);
    }
}
