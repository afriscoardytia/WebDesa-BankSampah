<?php

namespace App\Models;

use CodeIgniter\Model;

class SampahModel extends Model
{
    protected $table      = 'sampah';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_sampah', 'harga'];
}
