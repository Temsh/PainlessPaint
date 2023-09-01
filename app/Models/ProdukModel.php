<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
     protected $table = 'produk';
     protected $useTimestamps = true;
     public function getProductsByCategories($categories)
     {
          return $this->select('slug, produk, nama, kegunaan, harga')
               ->whereIn('kegunaan', $categories)
               ->findAll();
     }
}
