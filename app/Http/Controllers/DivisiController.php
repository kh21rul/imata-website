<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;
use stdClass;

class DivisiController extends Controller
{
    public $meta;

    public function __construct()
    {
        $this->meta = new stdClass();
        $this->meta->keywords = 'divisi imata lhokseumawe - aceh utara, imata lhokseumawe - aceh utara, imata, tamiang, mahasiswa tamiang';
        $this->meta->author = 'INFOKOM IMATA';
        $this->meta->description = 'Semua Divisi Ikatan Mahasiswa Aceh Tamiang, Lhokseumawe - Aceh Utara.';
        $this->meta->url = 'https://imata.web.id/divisi';
        $this->meta->type = 'divisi';
        $this->meta->image = 'https://imata.web.id/img/logo.png';
    }

    public function show($divisi)
    {
        $nama_divisi = $divisi;
        if ($nama_divisi == 'teras') {
            $nama_divisi = 'Pengurus Teras';
        } else if ($nama_divisi == 'koordinator') {
            $nama_divisi = 'Koordinator Wilayah';
        } else if ($nama_divisi == 'agama') {
            $nama_divisi = 'Divisi Keagamaan';
        } else if ($nama_divisi == 'kaderisasi') {
            $nama_divisi = 'Divisi Kaderisasi';
        } else if ($nama_divisi == 'sekretariat') {
            $nama_divisi = 'Divisi Kesekretariatan';
        } else if ($nama_divisi == 'infokom') {
            $nama_divisi = 'Divisi Informasi dan Komunikasi';
        } else if ($nama_divisi == 'humas') {
            $nama_divisi = 'Divisi Hubungan Masyarakat';
        } else if ($nama_divisi == 'kwh') {
            $nama_divisi = 'Divisi Kewirausahaan';
        } else if ($nama_divisi == 'seni') {
            $nama_divisi = 'Divisi Seni dan Budaya';
        } else {
            $nama_divisi = 'Pemuda dan Olahraga';
        }

        $this->meta->keywords = 'divisi ' . $nama_divisi . ' imata lhokseumawe - aceh utara, divisi imata lhokseumawe - aceh utara, imata lhokseumawe - aceh utara, imata, tamiang, mahasiswa tamiang';
        $this->meta->description = 'Divisi ' . $nama_divisi . ' Ikatan Mahasiswa Aceh Tamiang, Lhokseumawe - Aceh Utara.';
        $this->meta->url = 'https://imata.web.id/divisi/' . $nama_divisi;

        return view('divisi', [
            'title' => $nama_divisi,
            'meta' => $this->meta,
            'nama_divisi' => $nama_divisi,
            'divisi' => Divisi::find($divisi)
        ]);
    }
}
