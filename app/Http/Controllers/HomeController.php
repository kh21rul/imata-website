<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\Post;
use stdClass;

class HomeController extends Controller
{
    public $meta;

    public function __construct()
    {
        $this->meta = new stdClass();
        $this->meta->keywords = 'imata lhokseumawe - aceh utara, imata, tamiang, mahasiswa tamiang';
        $this->meta->author = 'INFOKOM IMATA';
        $this->meta->description = 'Ikatan Mahasiswa Aceh Tamiang (IMATA) adalah sebuah organisasi yang terdiri dari mahasiswa-mahasiswa Aceh Tamiang yang berkuliah di Lhokseumawe - Aceh Utara. IMATA bertujuan untuk mempererat tali silaturahmi antara mahasiswa Aceh Tamiang, serta untuk memajukan dan mengembangkan potensi-potensi yang ada di Aceh Tamiang.';
        $this->meta->url = env('APP_URL');
        $this->meta->type = 'website';
        $this->meta->image = env('APP_URL') . '/img/logo.png';
    }

    public function index()
    {
        return view('home', [
            'title' => 'Ikatan Mahasiswa Aceh Tamiang',
            'meta' => $this->meta,
            'divisions' => Division::orderByRaw('CAST(sort AS UNSIGNED)')->get(),
            'posts' => Post::latest()->paginate(3)
        ]);
    }
}
