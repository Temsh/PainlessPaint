<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\ShadeModel;
use App\Models\WarnaModel;
use App\Models\KontakModel;

class Pages extends BaseController
{
    protected $produkModel;
    protected $warnaModel;
    protected $shadeModel;
    protected $kontakModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
        $this->warnaModel = new WarnaModel();
        $this->shadeModel = new ShadeModel();
        $this->kontakModel = new KontakModel();
    }
    public function index()
    {
        $data = [
            'title' =>  'Home | PainlessPaint'
        ];
        return view('pages/home', $data);
    }
    public function colorCard()
    {
        $data = [
            'title' =>  'Color Card | PainlessPaint',
            'warna' => $this->warnaModel->getWarna()
        ];

        return view('pages/colorCard', $data);
    }
    public function colorPicker()
    {
        $data = [
            'title' =>  'Colors Picker | PainlessPaint'
        ];
        return view('pages/colorPicker', $data);
    }
    public function drawingPaint($categoryId)
    {
        $categoryId = explode('-', $categoryId);

        $produk = $this->produkModel->getProductsByCategories($categoryId);

        //colorcard
        $data = [
            'title' =>  'Drawing Paint | PainlessPaint',
            'produk' => $produk
        ];

        return view('pages/drawingPaint', $data);
    }
    public function housePaint($categoryId)
    {
        $categoryId = explode('-', $categoryId);

        $produk = $this->produkModel->getProductsByCategories($categoryId);


        $data = [
            'title' =>  'House Paint | PainlessPaint',
            'produk' => $produk
        ];

        return view('pages/housePaint', $data);
    }
    public function kontakKami()
    {
        $data = [
            'title' =>  'Kontak Kami| PainlessPaint'
        ];
        return view('pages/kontakKami', $data);
    }
    public function addPesan()
    {

        $data = [
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'telepon' => $this->request->getVar('telepon'),
            'pesan' => $this->request->getVar('pesan')
        ];
        $this->kontakModel->insert($data);
        /*
       //misal ada slug
       $slug = url_title($this->request->getVar('judul'), '-', true);

       */
        return redirect()->to('/pages/kontakKami');
    }
    public function priceChecker()
    {
        //colorcard
        $data = [
            'title' =>  'House Paint | PainlessPaint',
        ];

        return view('pages/priceChecker', $data);
    }
    public function displayOptionMenu($categoryId)
    {
        $categoryId = explode('-', $categoryId);

        $produk = $this->produkModel->getProductsByCategories($categoryId);


        $data = [
            'title' =>  'House Paint | PainlessPaint',
            'produk' => $produk
        ];

        return view('pages/priceChecker', $data);
    }
    public function profil()
    {
        $data = [
            'title' => 'Profil | PainlessPaint'
        ];
        return view('pages/profil', $data);
    }
    public function guideline()
    {
        $data = [
            'title' => 'Takaran | PainlessPaint'
        ];
        return view('pages/guideline', $data);
    }
    public function toko()
    {
        $data = [
            'title' =>  'Store | PainlessPaint'
        ];
        return view('pages/home', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Detail Produk',
            'produk' => $this->produkModel->getProduk($slug)
        ];

        //jika produk tidak ada di tabel
        if (empty($data['produk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Produk ' . $slug . ' tidak ditemukan.');
        }
        return view('pages/detail', $data);
    }
    public function detailWarna($categoryId)
    {
        $data = [
            'title' => 'Warna',
            'warnas' => $this->shadeModel->getImgById($categoryId)
        ];

        return view('pages/detailWarna', $data);
    }
}
