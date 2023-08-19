<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\ShadeModel;
use App\Models\WarnaModel;

class Pages extends BaseController
{
    protected $produkModel;
    protected $warnaModel;
    protected $shadeModel;
    public function __construct(){
        $this->produkModel = new ProdukModel();
        $this->warnaModel = new WarnaModel();
        $this->shadeModel = new ShadeModel();
    }
    public function index()
    {
        $data = [
            'title' =>  'Home | PainlessPaint'
        ];
        return view('pages/home',$data);
    }
    public function colorCard()
    {
        $data = [
            'title' =>  'Color Card | PainlessPaint',
            'warna'=> $this->warnaModel->getWarna()
        ];

        return view('pages/colorCard',$data);
    }
    public function colorPicker()
    {
        $data = [
            'title' =>  'Colors Picker | PainlessPaint'
        ];
        return view('pages/colorPicker',$data);
    }
    public function drawingPaint()
    {
        $data = [
            'title' =>  'Drawing Paint | PainlessPaint'
        ];
        return view('pages/drawingPaint',$data);
    }
    public function housePaint($categoryId)
    {
       // $produk = $this->produkModel->findAll();
        $data = [
            'title' => 'House Paint | PainlessPaint',
            'produk'=> $this->produkModel-> getProdukById($categoryId)
        ];
       //$produkModel = new ProdukModel();

        return view('pages/housePaint',$data);
    }
    public function kontakKami()
    {
        $data = [
            'title' =>  'Kontak Kami| PainlessPaint'
        ];
        return view('pages/kontakKami',$data);
    }
    public function priceChecker()
    {
        $data = [
            'title' =>  'Price Checker| PainlessPaint'
        ];
        return view('pages/priceChecker',$data);
    }
    public function profil()
    {
        $data = [
            'title' => 'Profil | PainlessPaint'
        ];
        return view('pages/profil',$data);
    }
    public function guideline()
    {
        $data = [
            'title' => 'Takaran | PainlessPaint'
        ];
        return view('pages/guideline',$data);
    }
    public function toko()
    {
        $data = [
            'title' =>  'Store | PainlessPaint'
        ];
        return view('pages/home',$data);
    }
    
    public function detail($slug){
        
        $data = [
            'title' => 'Detail Produk',
            'produk' => $this->produkModel->getProduk($slug)
        ];
        return view('pages/detail', $data);
    }
    public function detailWarna($categoryId)
    {
        $data = [
            'title' => 'Warna',
            'warnas'=> $this->shadeModel->getImgById($categoryId)
        ];

        return view('pages/detailWarna', $data);
    }
    
}
