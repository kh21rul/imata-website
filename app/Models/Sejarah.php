<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejarah
{
    private static $content = '
        <p>Ikatan Mahasiswa Aceh Tamiang (IMATA) didirikan di Lhokseumawe pada tanggal Tujuh Bulan April Tahun Dua Ribu Tiga belas (07/04/2013). Organisasi ini terbentuk atas inisiatif dari sekelompok mahasiswa yang berasal dari Aceh Tamiang dan sedang menempuh pendidikan di berbagai perguruan tinggi daerah Kota Lhokseumawe dan Aceh Utara. Mereka memiliki kesamaan latar belakang dan seringkali bertemu dalam kegiatan nongkrong di sekitar kampus.</p>
            <p>Latar belakang terbentuknya IMATA berasal dari keinginan para mahasiswa Aceh Tamiang untuk mempererat tali silaturahmi dan solidaritas antar sesama mahasiswa yang berasal dari daerah yang sama. Selain itu, mereka juga ingin memajukan dan mengembangkan potensi-potensi yang ada di Aceh Tamiang, serta memberikan kontribusi positif dalam pembangunan daerah.</p>
            <p>Dalam perjalanan sejarahnya, IMATA telah menjadi organisasi mahasiswa yang diakui dan memiliki peran yang penting dalam memajukan daerah asal mahasiswanya. Keberadaan IMATA diharapkan dapat menjadi inspirasi bagi organisasi mahasiswa lainnya untuk berkontribusi positif dalam memajukan daerahnya masing-masing.</p>
            <p><strong>Tujuan IMATA</strong> adalah menampung seluruh element mahasiswa Tamiang yang berkuliah di Lhokseumawe - Aceh Utara menuju kehidupan kampus kritis yang bertanggung jawab, dinamin, demokratis dan harmonis.</p>
            <h2 class="judul pt-4">
                Fungsi IMATA
            </h2>                      
            <ol>
                <li>Mempererat tali silaturahmi antara mahasiswa Aceh Tamiang yang sedang menempuh pendidikan di berbagai perguruan tinggi di seluruh Indonesia.</li>
                <li>Memajukan dan mengembangkan potensi-potensi yang ada di Aceh Tamiang.</li>
                <li>Memberikan kontribusi positif dalam pembangunan daerah.</li>
                <li>Menyediakan wadah bagi mahasiswa Aceh Tamiang untuk berorganisasi dan meningkatkan kualitas diri.</li>
                <li>Mengadakan kegiatan sosial dan kepedulian terhadap masyarakat sekitar.</li>
                <li>Mempromosikan kekayaan budaya Aceh Tamiang kepada masyarakat luas.</li>
                <li>Menjadi inspirasi bagi organisasi mahasiswa lainnya untuk berkontribusi positif dalam memajukan daerahnya masing-masing.</li>
            </ol>
        ';

    public static function all()
    {
        return self::$content;
    }
}
