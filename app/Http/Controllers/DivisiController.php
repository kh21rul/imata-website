<?php

namespace App\Http\Controllers;

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
        $this->meta->url = env('APP_URL') . '/divisi';
        $this->meta->type = 'divisi';
        $this->meta->image = env('APP_URL') . '/img/logo.png';
    }

    public function show($divisi)
    {
        $url_divisi = $divisi;
        if ($url_divisi == 'teras') {
            $nama_divisi = 'Pengurus Teras';
        } else if ($url_divisi == 'koordinator') {
            $nama_divisi = 'Koordinator Wilayah';
        } else if ($url_divisi == 'agama') {
            $nama_divisi = 'Divisi Keagamaan';
        } else if ($url_divisi == 'kaderisasi') {
            $nama_divisi = 'Divisi Kaderisasi';
        } else if ($url_divisi == 'sekretariat') {
            $nama_divisi = 'Divisi Kesekretariatan';
        } else if ($url_divisi == 'infokom') {
            $nama_divisi = 'Divisi Informasi dan Komunikasi';
        } else if ($url_divisi == 'humas') {
            $nama_divisi = 'Divisi Hubungan Masyarakat';
        } else if ($url_divisi == 'kwh') {
            $nama_divisi = 'Divisi Kewirausahaan';
        } else if ($url_divisi == 'seni') {
            $nama_divisi = 'Divisi Seni dan Budaya';
        } else if ($url_divisi == 'olahraga') {
            $nama_divisi = 'Pemuda dan Olahraga';
        }

        $this->meta->keywords = 'divisi ' . $nama_divisi . ' imata lhokseumawe - aceh utara, divisi imata lhokseumawe - aceh utara, imata lhokseumawe - aceh utara, imata, tamiang, mahasiswa tamiang';
        $this->meta->description = 'Divisi ' . $nama_divisi . ' Ikatan Mahasiswa Aceh Tamiang, Lhokseumawe - Aceh Utara.';
        $this->meta->url = env('APP_URL') . '/divisi/' . $url_divisi;

        return view('divisi', [
            'title' => $nama_divisi,
            'meta' => $this->meta,
            'nama_divisi' => $nama_divisi,
            'divisi' => Divisi::find($divisi)
        ]);
    }
}
