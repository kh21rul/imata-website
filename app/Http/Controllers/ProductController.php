<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use stdClass;

class ProductController extends Controller
{
    public $meta;

    public function __construct()
    {
        $this->meta = new stdClass();
        $this->meta->keywords = 'imata shop, imata lhokseumawe - aceh utara, imata, tamiang, mahasiswa tamiang';
        $this->meta->author = 'INFOKOM IMATA';
        $this->meta->description = 'Shop Ikatan Mahasiswa Aceh Tamiang, Lhokseumawe - Aceh Utara';
        $this->meta->url = 'https://imata.web.id/toko';
        $this->meta->type = 'toko';
        $this->meta->image = 'https://imata.web.id/img/logo.png';
    }

    public function index()
    {
        return view('toko', [
            'title' => 'IMATA Shop',
            'meta' => $this->meta,
            'products' => Product::latest()->paginate(8)
        ]);
    }
}
