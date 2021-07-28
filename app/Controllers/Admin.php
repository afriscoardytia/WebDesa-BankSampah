<?php

namespace App\Controllers;

use App\Models\SampahModel;
use App\Models\NasabahModel;
use App\Models\AdminModel;
use App\Models\TarikSaldoModel;
use App\Models\JemputModel;
use App\Models\SetorSampahModel;
use App\Models\DashboardAdminModel;
use App\Models\DataUserModel;

class Admin extends BaseController
{
    protected $sampahModel;
    protected $nasabahModel;
    protected $adminModel;
    protected $tarikSaldoModel;
    protected $jemputModel;
    protected $setorSampahModel;
    protected $dashboardAdminModel;
    protected $dataUserModel;

    public function __construct()
    {
        $this->sampahModel = new SampahModel();
        $this->nasabahModel = new NasabahModel();
        $this->adminModel = new AdminModel();
        $this->tarikSaldoModel = new TarikSaldoModel();
        $this->jemputModel = new JemputModel();
        $this->setorSampahModel = new SetorSampahModel();
        $this->dashboardAdminModel = new DashboardAdminModel();
        $this->dataUserModel = new DataUserModel();
        $this->req = \Config\Services::request();
    }
    public function index()
    {
        $id_user = user()->id;
        $data_user =  $this->dataUserModel->find($id_user);

        $tarik = $this->dashboardAdminModel->tarik();
        $jemput = $this->dashboardAdminModel->jemput();
        $admin = $this->dashboardAdminModel->admin();
        $nasabah = $this->dashboardAdminModel->nasabah();
        $data = [
            'title' => 'Dashboard | Bank Sampah | Desa Manyarejo',
            'tarik' => $tarik,
            'jemput' => $jemput,
            'admin' => $admin,
            'nasabah' => $nasabah,
            'data_user' => $data_user
        ];
        return view('admin/index', $data);
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
        return redirect()->to('/admin/index');
    }

    // Data Sampah

    public function dataSampah()
    {
        $id_user = user()->id;
        $data_user =  $this->dataUserModel->find($id_user);

        $sampah = $this->sampahModel->findAll();

        $data = [
            'title' => 'Data Sampah | Bank Sampah | Desa Manyarejo',
            'sampah' => $sampah,
            'data_user' => $data_user
        ];

        return view('admin/read-data-sampah', $data);
    }

    public function createDataSampah()
    {
        $id_user = user()->id;
        $data_user =  $this->dataUserModel->find($id_user);

        $data = [
            'title' => 'Data Sampah | Bank Sampah | Desa Manyarejo',
            'validation' => \Config\Services::validation(),
            'data_user' => $data_user
        ];
        return view('admin/create-data-sampah', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'nama_sampah' => [
                'rules' => 'required|is_unique[sampah.nama_sampah]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah ada.'
                ]
            ]
        ])) {
            return redirect()->to('/admin/createDataSampah')->withInput();
        }


        $this->sampahModel->save([
            'nama_sampah' => $this->req->getVar('nama_sampah'),
            'harga' => $this->req->getVar('harga')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/admin/dataSampah');
    }

    public function updateDataSampah($id)
    {
        $id_user = user()->id;
        $data_user =  $this->dataUserModel->find($id_user);

        $data = [
            'title' => 'Data Sampah | Bank Sampah | Desa Manyarejo',
            'validation' => \Config\Services::validation(),
            'sampah' => $this->sampahModel->find($id),
            'data_user' => $data_user
        ];
        return view('admin/update-data-sampah', $data);
    }

    public function update($id)
    {

        if (!$this->validate([
            'nama_sampah' => [
                'rules' => "required|is_unique[sampah.nama_sampah,id,{$id}]",

                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah ada.'
                ]
            ]
        ])) {
            return redirect()->to('/admin/updateDataSampah/' . $this->req->getVar('id'))->withInput();
        }

        $this->sampahModel->save([
            'id' => $id,
            'nama_sampah' => $this->req->getVar('nama_sampah'),
            'harga' => $this->req->getVar('harga')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/admin/dataSampah');
    }

    public function deleteDataSampah($id)
    {
        $this->sampahModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin/dataSampah');
    }

    // Data Nasabah

    public function dataNasabah()
    {
        $id_user = user()->id;
        $data_user =  $this->dataUserModel->find($id_user);

        $nasabah = $this->nasabahModel->join();

        $data = [
            'title' => 'Data Nasabah | Bank Sampah | Desa Manyarejo',
            'nasabah' => $nasabah,
            'data_user' => $data_user
        ];

        return view('admin/read-data-nasabah', $data);
    }

    public function detailDataNasabah($id)
    {
        $id_user = user()->id;
        $data_user =  $this->dataUserModel->find($id_user);

        $data = [
            'title' => 'Data Nasabah | Bank Sampah | Desa Manyarejo',
            'user' => $this->nasabahModel->detailData($id),
            'judul_form' => 'Data Nasabah',
            'data_user' => $data_user
        ];
        return view('admin/detail-data', $data);
    }

    public function deleteDataNasabah($id)
    {
        $this->nasabahModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin/dataNasabah');
    }

    public function updateJadikanAdmin($id)
    {
        $this->nasabahModel->updateData($id);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/admin/dataNasabah');
    }

    // Data Admin

    public function dataAdmin()
    {
        $id_user = user()->id;
        $data_user =  $this->dataUserModel->find($id_user);

        $admin = $this->adminModel->join();

        $data = [
            'title' => 'Data Admin | Bank Sampah | Desa Manyarejo',
            'admin' => $admin,
            'data_user' => $data_user
        ];

        return view('admin/read-data-admin', $data);
    }

    public function detailDataAdmin($id)
    {
        $id_user = user()->id;
        $data_user =  $this->dataUserModel->find($id_user);

        $data = [
            'title' => 'Data Admin | Bank Sampah | Desa Manyarejo',
            'user' => $this->adminModel->detailData($id),
            'judul_form' => 'Data Admin',
            'data_user' => $data_user
        ];
        return view('admin/detail-data', $data);
    }

    public function deleteDataAdmin($id)
    {
        $this->adminModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin/dataAdmin');
    }

    public function updateJadikanNasabah($id)
    {
        $this->adminModel->updateData($id);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/admin/dataAdmin');
    }


    // Tarik Saldo
    public function pengajuanTarikSaldo()
    {
        $tarik_saldo = $this->tarikSaldoModel->joinPengajuan();

        $id_user = user()->id;
        $data_user =  $this->dataUserModel->find($id_user);

        $data = [
            'title' => 'Pengajuan | Tarik Saldo | Bank Sampah | Desa Manyarejo',
            'tarik_saldo' => $tarik_saldo,
            'data_user' => $data_user
        ];

        return view('admin/read-pengajuan-tarik', $data);
    }

    public function updateSetujui($id)
    {
        $this->tarikSaldoModel->updateSetujui($id);
        session()->setFlashdata('pesan', 'Data berhasil disetujui.');
        return redirect()->to('/admin/pengajuanTarikSaldo');
    }

    public function updateTolak($id)
    {
        $this->tarikSaldoModel->updatetolak($id);
        session()->setFlashdata('pesan', 'Data berhasil ditolak.');
        return redirect()->to('/admin/pengajuanTarikSaldo');
    }

    public function riwayatTarikSaldo()
    {
        $id_user = user()->id;
        $data_user =  $this->dataUserModel->find($id_user);

        $tarik_saldo = $this->tarikSaldoModel->joinRiwayat();

        $data = [
            'title' => 'Riwayat | Tarik Saldo | Bank Sampah | Desa Manyarejo',
            'tarik_saldo' => $tarik_saldo,
            'data_user' => $data_user
        ];

        return view('admin/read-riwayat-tarik', $data);
    }

    // Jemput Sampah
    public function jemputSampah()
    {
        $id_user = user()->id;
        $data_user =  $this->dataUserModel->find($id_user);

        $jemput = $this->jemputModel->join();

        $data = [
            'title' => 'Jemput Sampah | Bank Sampah | Desa Manyarejo',
            'jemput' => $jemput,
            'data_user' => $data_user
        ];

        return view('admin/read-jemput-sampah', $data);
    }

    // Setor Sampah
    public function transaksiSetorSampah()
    {
        $id_user = user()->id;
        $data_user =  $this->dataUserModel->find($id_user);

        $sampah = $this->setorSampahModel->dataSampah();
        $user = $this->setorSampahModel->dataUser();
        $data = [
            'title' => 'Transaksi | Setor Sampah | Bank Sampah | Desa Manyarejo',
            'validation' => \Config\Services::validation(),
            'sampah' => $sampah,
            'user' => $user,
            'data_user' => $data_user
        ];
        return view('admin/create-transaksi-setor-sampah', $data);
    }
    public function simpan()
    {
        // if (!$this->validate([
        //     'nama_sampah' => [
        //         'rules' => 'required|is_unique[sampah.nama_sampah]',
        //         'errors' => [
        //             'required' => '{field} harus diisi.',
        //             'is_unique' => '{field} sudah ada.'
        //         ]
        //     ]
        // ])) {
        //     return redirect()->to('/admin/createDataSampah')->withInput();
        // }

        $sampah = $this->req->getVar('nama_sampah');
        $harga = $this->sampahModel->find($sampah);
        $jumlah = $this->req->getVar('jumlah');
        $total = $harga['harga'] * $jumlah;

        $this->setorSampahModel->save([
            'id_user' => $this->req->getVar('nama_nasabah'),
            'id_sampah' => $this->req->getVar('nama_sampah'),
            'jumlah' => $this->req->getVar('jumlah'),
            'harga' => $total,
            'id_admin' => user()->id,
        ]);

        $id = $this->req->getVar('nama_nasabah');
        $this->setorSampahModel->updateHarga($id, $total);


        session()->setFlashdata('pesan', 'Data transaksi berhasil ditambahkan.');
        return redirect()->to('/admin/transaksiSetorSampah');
    }

    public function riwayatSetorSampah()
    {
        $id_user = user()->id;
        $data_user =  $this->dataUserModel->find($id_user);

        $setor = $this->setorSampahModel->dataRiwayat();

        $data = [
            'title' => 'Riwayat | Setor Sampah | Bank Sampah | Desa Manyarejo',
            'setor' => $setor,
            'data_user' => $data_user
        ];

        return view('admin/read-riwayat-setor-sampah', $data);
    }
}
