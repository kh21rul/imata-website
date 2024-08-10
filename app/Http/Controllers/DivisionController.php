<?php

namespace App\Http\Controllers;

use stdClass;
use App\Models\Division;

class DivisionController extends Controller
{
    public $meta;

    public function __construct()
    {
        $this->meta = new stdClass();
        $this->meta->keywords = 'divisi imata lhokseumawe - aceh utara, imata lhokseumawe - aceh utara, imata, tamiang, mahasiswa tamiang';
        $this->meta->author = 'INFOKOM IMATA';
        $this->meta->description = 'Semua Divisi Ikatan Mahasiswa Aceh Tamiang, Lhokseumawe - Aceh Utara.';
        $this->meta->url = env('APP_URL') . '/divisi';
        $this->meta->type = 'divisi';
        $this->meta->image = env('APP_URL') . '/img/logo.png';
    }

    public function show(Division $division)
    {
        $this->meta->keywords = 'divisi ' . $division->title . ' imata lhokseumawe - aceh utara, divisi imata lhokseumawe - aceh utara, imata lhokseumawe - aceh utara, imata, tamiang, mahasiswa tamiang';
        $this->meta->description = 'Divisi ' . $division->title . ' Ikatan Mahasiswa Aceh Tamiang, Lhokseumawe - Aceh Utara.';
        $this->meta->url = env('APP_URL') . '/divisi/' . $division->slug;

        return view('divisi', [
            'title' => $division->title,
            'meta' => $this->meta,
            'division' => $division
        ]);
    }
}
