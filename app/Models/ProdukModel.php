<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
     protected $table = 'produk';
     protected $useTimestamps = true;
     public function getProdukById($categoryId)
     {
          if ($categoryId == 'HousePaint') {
               return $this->select('slug', 'produk', 'nama', 'kegunaan', 'harga')
                    ->where('kegunaan', 'Exterior')
                    ->where('kegunaan', 'Interior')
                    ->findAll();
          } else if ($categoryId == 'HousePaint') {
               return $this->select('slug', 'produk', 'nama', 'kegunaan', 'harga')
                    ->where('kegunaan', 'Oil_based')
                    ->where('kegunaan', 'Watercolor')
                    ->findAll();
          }
     }
}
