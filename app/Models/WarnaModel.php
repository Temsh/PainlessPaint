<?php

namespace App\Models;

use CodeIgniter\Model;

class WarnaModel extends Model {
     protected $table = 'warna';
     protected $useTimestamps = true;
     public function getWarna($nama=false){
          if($nama ==false){
               return $this -> findAll();
          }
          return $this->where(['nama' => $nama])->first();
     }
}