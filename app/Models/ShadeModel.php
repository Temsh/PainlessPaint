<?php

namespace App\Models;

use CodeIgniter\Model;

class ShadeModel extends Model{
    protected $table = 'warna';    
    protected $useTimestamps = true;
    public function getImgById($categoryId)
    {
        return $this->select('gambar')
                    ->where('shade', $categoryId)
                    ->findAll();
    }
}

