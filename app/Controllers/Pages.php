<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Desa Manyarejo'
        ];
        return view('pages/home', $data);
    }
    public function profil()
    {
        $data = [
            'title' => 'Profil | Desa Manyarejo'
        ];
        return view('pages/profil', $data);
    }
    public function bankSampah()
    {
        $data = [
            'title' => 'Bank Sampah | Desa Manyarejo'
        ];
        return view('pages/bankSampah', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact | Desa Manyarejo'
        ];
        return view('pages/contact', $data);
    }
    public function kkn()
    {
        $data = [
            'title' => 'KKN Kelompok 8 | Desa Manyarejo'
        ];
        return view('pages/kkn', $data);
    }

    public function visi_misi()
    {
        $data = [
            'title' => 'Visi & Misi | Desa Manyarejo'
        ];
        return view('pages/visi-misi', $data);
    }
}
