<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sejarah;
use stdClass;

class SejarahController extends Controller
{
    public $meta;

    public function __construct()
    {
        $this->meta = new stdClass();
        $this->meta->keywords = 'sejarah imata lhokseumawe - aceh utara, imata lhokseumawe - aceh utara, imata, tamiang, mahasiswa tamiang';
        $this->meta->author = 'INFOKOM IMATA';
        $this->meta->description = 'Ikatan Mahasiswa Aceh Tamiang (IMATA) didirikan di Lhokseumawe pada tanggal Tujuh Bulan April Tahun Dua Ribu Tiga belas (07/04/2013). Organisasi ini terbentuk atas inisiatif dari sekelompok mahasiswa yang berasal dari Aceh Tamiang dan sedang menempuh pendidikan di berbagai perguruan tinggi daerah Kota Lhokseumawe dan Aceh Utara. Mereka memiliki kesamaan latar belakang dan seringkali bertemu dalam kegiatan nongkrong di sekitar kampus.';
        $this->meta->url = 'https://imata.web.id/sejarah';
        $this->meta->type = 'website';
        $this->meta->image = 'https://imata.web.id/img/logo.png';
    }

    public function index()
    {
        return view('sejarah', [
            'title' => 'Sejarah Ikatan Mahasiswa Aceh Tamiang, Lhokseumawe - Aceh Utara',
            'meta' => $this->meta,
            'content' => Sejarah::all()
        ]);
    }
}
