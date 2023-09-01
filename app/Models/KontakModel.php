<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakModel extends Model
{
     protected $table = 'kontak';
     protected $useTimestamps = true;
     protected $allowedFields = ['nama', 'email', 'telepon', 'pesan'];
}
