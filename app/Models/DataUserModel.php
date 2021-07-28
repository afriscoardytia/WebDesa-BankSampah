<?php

namespace App\Models;

use CodeIgniter\Model;

class DataUserModel extends Model
{
    protected $table      = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'no_hp', 'jenis_kelamin', 'alamat', 'no_rumah', 'rt', 'rw'];
}
