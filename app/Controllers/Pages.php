<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Pages extends BaseController
{
    protected $produkModel;
    public function __construct(){
        $this->produkModel = new ProdukModel();
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
            'title' =>  'Colors Card | PainlessPaint'
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
    public function housePaint()
    {
       // $produk = $this->produkModel->findAll();
        $data = [
            'title' =>  'House Paint | PainlessPaint',
            'produk'=> $this->produkModel->getProduk()
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
    
    public function detail($id){
        
        $data = [
            'title' => 'Detail Produk',
            'produk' => $this->produkModel->getProduk($id)
        ];
        return view('pages/detail', $data);
    }
}
