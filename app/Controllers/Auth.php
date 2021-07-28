<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        $data = [
            'title' => 'Login | Bank Sampah | Desa Manyarejo'
        ];
        return view('auth/login', $data);
    }
}
