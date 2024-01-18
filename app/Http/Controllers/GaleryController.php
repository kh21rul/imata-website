<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use stdClass;

class GaleryController extends Controller
{
    public $meta;

    public function __construct()
    {
        $this->meta = new stdClass();
        $this->meta->keywords = 'galery foto berita imata lhokseumawe - aceh utara, imata lhokseumawe - aceh utara, imata, tamiang, mahasiswa tamiang';
        $this->meta->author = 'INFOKOM IMATA';
        $this->meta->description = 'Galery foto berita dan artikel mengenai Ikatan Mahasiswa Aceh Tamiang, Lhokseumawe - Aceh Utara';
        $this->meta->url = 'https://imata.web.id/galery';
        $this->meta->type = 'galery';
        $this->meta->image = 'https://imata.web.id/img/logo.png';
    }

    public function index()
    {
        $posts = Post::latest()->get();
        $images = [];

        foreach ($posts as $post) {
            $images[] = [
                'title' => $post->title,
                'image' => $post->image,
            ];
        }

        return view('galeri', [
            'title' => 'Galery Foto Berita',
            'meta' => $this->meta,
            'images' => $images
        ]);
    }
}
