<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi
{
    private static $pengurus = [
        // Teras
        [
            "nama" => "Nuhari Azman",
            "jabatan" => "Ketua",
            "foto" => "nuhari.gif",
            "divisi" => "teras",
        ],
        [
            "nama" => "Andika Al Imran",
            "jabatan" => "Anggota",
            "foto" => "andika.gif",
            "divisi" => "teras",
        ],
        [
            "nama" => "Ridha Syahira",
            "jabatan" => "Sekretaris Umum",
            "foto" => "ridha.gif",
            "divisi" => "teras",
        ],
        [
            "nama" => "Nur Sri Yati",
            "jabatan" => "Bendahara Umum",
            "foto" => "nur.gif",
            "divisi" => "teras",
        ],

        // Koordinator
        [
            "nama" => "Aliem maharits",
            "jabatan" => "Koordinator Bukit Indah",
            "foto" => "aliem.gif",
            "divisi" => "koordinator",
        ],
        [
            "nama" => "Sinta Rama Rangkuti",
            "jabatan" => "Koordinator Uniki",
            "foto" => "sinta.gif",
            "divisi" => "koordinator",
        ],
        [
            "nama" => "Putri Raudhatul Muna",
            "jabatan" => "Koordinator Poltekkes",
            "foto" => "putri.gif",
            "divisi" => "koordinator",
        ],
        [
            "nama" => "M.Firdaus",
            "jabatan" => "Koordinator Reuleut",
            "foto" => "firdaus.gif",
            "divisi" => "koordinator",
        ],
        [
            "nama" => "Diki Ramanda",
            "jabatan" => "Koordinator Poltek",
            "foto" => "diki.gif",
            "divisi" => "koordinator",
        ],
        [
            "nama" => "Syahri Ramadha",
            "jabatan" => "Koordinator IAIN Lhokseumawe",
            "foto" => "syahri.gif",
            "divisi" => "koordinator",
        ],

        // Agama
        [
            "nama" => "Muhammad irfan",
            "jabatan" => "Ketua",
            "foto" => "irfan.gif",
            "divisi" => "agama",
        ],
        [
            "nama" => "Ainun Fatwa",
            "jabatan" => "Anggota",
            "foto" => "ainun.gif",
            "divisi" => "agama",
        ],
        [
            "nama" => "Rezkya Nurdiana",
            "jabatan" => "Anggota",
            "foto" => "nurdiana.gif",
            "divisi" => "agama",
        ],
        [
            "nama" => "Putri Maulida Turrahma",
            "jabatan" => "Anggota",
            "foto" => "maulida.gif",
            "divisi" => "agama",
        ],
        [
            "nama" => "Wahyudi",
            "jabatan" => "Anggota",
            "foto" => "wahyudi.gif",
            "divisi" => "agama",
        ],
        [
            "nama" => "M. saleh",
            "jabatan" => "Anggota",
            "foto" => "saleh.gif",
            "divisi" => "agama",
        ],
        [
            "nama" => "Nurul Hikmah",
            "jabatan" => "Anggota",
            "foto" => "hikmah.gif",
            "divisi" => "agama",
        ],
        [
            "nama" => "Silvia Wulandari",
            "jabatan" => "Anggota",
            "foto" => "wulandari.gif",
            "divisi" => "agama",
        ],
        [
            "nama" => "M. Ferdy Wardhanii",
            "jabatan" => "Anggota",
            "foto" => "ferdy.gif",
            "divisi" => "agama",
        ],
        [
            "nama" => "Siti Hariani",
            "jabatan" => "Anggota",
            "foto" => "hariani.gif",
            "divisi" => "agama",
        ],

        // Kaderisasi
        [
            "nama" => "Deri Sahputra",
            "jabatan" => "Ketua",
            "foto" => "deri.gif",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Putri Ulfah Syahridha",
            "jabatan" => "Anggota",
            "foto" => "ulfah.gif",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Wahyuni Wulandari",
            "jabatan" => "Anggota",
            "foto" => "wahyuni.gif",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Hary Setiawan",
            "jabatan" => "Anggota",
            "foto" => "hary.gif",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Tri Suhandina",
            "jabatan" => "Anggota",
            "foto" => "tri.gif",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Khairul Anisa",
            "jabatan" => "Anggota",
            "foto" => "nisa.gif",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Amelia Ashri Putri",
            "jabatan" => "Anggota",
            "foto" => "amel.gif",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Fery Adriansyah",
            "jabatan" => "Anggota",
            "foto" => "fery.gif",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Sri Suci Nurmala Sari",
            "jabatan" => "Anggota",
            "foto" => "suci.gif",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Rizqan Tayyiba",
            "jabatan" => "Anggota",
            "foto" => "rizqan.gif",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Atururi Husaini Fadillah",
            "jabatan" => "Anggota",
            "foto" => "atururi.gif",
            "divisi" => "kaderisasi",
        ],

        // Kesekretariatan
        [
            "nama" => "Ade Lucky Setiawan",
            "jabatan" => "Ketua",
            "foto" => "lucky.gif",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Cindi Maharani",
            "jabatan" => "Anggota",
            "foto" => "cindi.gif",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Yulia Tryani",
            "jabatan" => "Anggota",
            "foto" => "yulia.gif",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Yola Deviani",
            "jabatan" => "Anggota",
            "foto" => "yola.gif",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Zheiraldo Harris",
            "jabatan" => "Anggota",
            "foto" => "harris.gif",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Sri Widiya",
            "jabatan" => "Anggota",
            "foto" => "widiya.gif",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Srik Wardani",
            "jabatan" => "Anggota",
            "foto" => "wardani.gif",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Tri Agustina",
            "jabatan" => "Anggota",
            "foto" => "agustina.gif",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Fajar Permadani",
            "jabatan" => "Anggota",
            "foto" => "fajar.gif",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Meisya Aprillia",
            "jabatan" => "Anggota",
            "foto" => "meisya.gif",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Enny Anggraini",
            "jabatan" => "Anggota",
            "foto" => "enny.gif",
            "divisi" => "sekretariat",
        ],

        // Infokom
        [
            "nama" => "Rezkya Nurdiani",
            "jabatan" => "Ketua",
            "foto" => "nurdiani.gif",
            "divisi" => "infokom",
        ],
        [
            "nama" => "Wanda Baskoro",
            "jabatan" => "Anggota",
            "foto" => "wanda.gif",
            "divisi" => "infokom",
        ],
        [
            "nama" => "Khairul Aqram",
            "jabatan" => "Anggota",
            "foto" => "aqram.gif",
            "divisi" => "infokom",
        ],
        [
            "nama" => "Silvia Masyitah",
            "jabatan" => "Anggota",
            "foto" => "silvia.gif",
            "divisi" => "infokom",
        ],
        [
            "nama" => "Luna Firriyal",
            "jabatan" => "Anggota",
            "foto" => "luna.gif",
            "divisi" => "infokom",
        ],
        [
            "nama" => "Kristi Enjelita",
            "jabatan" => "Anggota",
            "foto" => "kristi.gif",
            "divisi" => "infokom",
        ],
        [
            "nama" => "Mei Syahdila",
            "jabatan" => "Anggota",
            "foto" => "mei.gif",
            "divisi" => "infokom",
        ],
        [
            "nama" => "Sri Julinda Saputri",
            "jabatan" => "Anggota",
            "foto" => "julinda.gif",
            "divisi" => "infokom",
        ],
        [
            "nama" => "Nur jannah",
            "jabatan" => "Anggota",
            "foto" => "jannah.gif",
            "divisi" => "infokom",
        ],
        [
            "nama" => "Syahru Ramadhan",
            "jabatan" => "Anggota",
            "foto" => "syahru.gif",
            "divisi" => "infokom",
        ],
        [
            "nama" => "Faddila Fadliani",
            "jabatan" => "Anggota",
            "foto" => "faddila.gif",
            "divisi" => "infokom",
        ],
        [
            "nama" => "Nurul A'la",
            "jabatan" => "Anggota",
            "foto" => "nurul.gif",
            "divisi" => "infokom",
        ],

        // Humas 
        [
            "nama" => "Dimas Murthada Fadiya",
            "jabatan" => "Ketua",
            "foto" => "dimas.gif",
            "divisi" => "humas",
        ],
        [
            "nama" => "Natasya Rizka",
            "jabatan" => "Anggota",
            "foto" => "tasya.gif",
            "divisi" => "humas",
        ],
        [
            "nama" => "Tiwa Kusuma",
            "jabatan" => "Anggota",
            "foto" => "tiwa.gif",
            "divisi" => "humas",
        ],
        [
            "nama" => "Hafiz Ambiya Azhari",
            "jabatan" => "Anggota",
            "foto" => "hafiz.gif",
            "divisi" => "humas",
        ],
        [
            "nama" => "Meisya Athaya",
            "jabatan" => "Anggota",
            "foto" => "athaya.gif",
            "divisi" => "humas",
        ],
        [
            "nama" => "Arif",
            "jabatan" => "Anggota",
            "foto" => "arif.gif",
            "divisi" => "humas",
        ],
        [
            "nama" => "Vira Aurellya",
            "jabatan" => "Anggota",
            "foto" => "vira.gif",
            "divisi" => "humas",
        ],
        [
            "nama" => "Rehan",
            "jabatan" => "Anggota",
            "foto" => "rehan.gif",
            "divisi" => "humas",
        ],
        [
            "nama" => "Aji Priansyah",
            "jabatan" => "Anggota",
            "foto" => "aji.gif",
            "divisi" => "humas",
        ],
        [
            "nama" => "Nuraini Eka",
            "jabatan" => "Anggota",
            "foto" => "eka.gif",
            "divisi" => "humas",
        ],
        [
            "nama" => "Muhammad Sandi Syahputra",
            "jabatan" => "Anggota",
            "foto" => "sandi.gif",
            "divisi" => "humas",
        ],


        // kwh
        [
            "nama" => "Syarifah Kahairani",
            "jabatan" => "Ketua",
            "foto" => "ipeh.gif",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Rizki iqbal Fauzi",
            "jabatan" => "Anggota",
            "foto" => "iqbal.gif",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Fitri Anjani",
            "jabatan" => "Anggota",
            "foto" => "fitri.gif",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Adek Aemira",
            "jabatan" => "Anggota",
            "foto" => "adek.gif",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Siti Aisyah Rangkuti",
            "jabatan" => "Anggota",
            "foto" => "rangkuti.gif",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Nur Fathiyyah",
            "jabatan" => "Anggota",
            "foto" => "fathiyyah.gif",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Erika Ayuni",
            "jabatan" => "Anggota",
            "foto" => "erika.gif",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Wulan Dhari",
            "jabatan" => "Anggota",
            "foto" => "wulan.gif",
            "divisi" => "kwh",
        ],
        [
            "nama" => "O K M Zaky",
            "jabatan" => "Anggota",
            "foto" => "zaky.gif",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Sari Amalia",
            "jabatan" => "Anggota",
            "foto" => "lia.gif",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Menty Hajizah",
            "jabatan" => "Anggota",
            "foto" => "menty.gif",
            "divisi" => "kwh",
        ],

        // Seni
        [
            "nama" => "Anggi Syafitri",
            "jabatan" => "Ketua",
            "foto" => "anggi.gif",
            "divisi" => "seni",
        ],
        [
            "nama" => "Khadijah Vany",
            "jabatan" => "Anggota",
            "foto" => "khadijah.gif",
            "divisi" => "seni",
        ],
        [
            "nama" => "Izmi Khairunnisa",
            "jabatan" => "Anggota",
            "foto" => "izmi.gif",
            "divisi" => "seni",
        ],
        [
            "nama" => "Darmi samosir",
            "jabatan" => "Anggota",
            "foto" => "darmi.gif",
            "divisi" => "seni",
        ],
        [
            "nama" => "M. Refvaldy A. F",
            "jabatan" => "Anggota",
            "foto" => "refvaldy.gif",
            "divisi" => "seni",
        ],
        [
            "nama" => "Yasya Almira",
            "jabatan" => "Anggota",
            "foto" => "yasya.gif",
            "divisi" => "seni",
        ],
        [
            "nama" => "Meisita Ramadani",
            "jabatan" => "Anggota",
            "foto" => "meisita.gif",
            "divisi" => "seni",
        ],
        [
            "nama" => "Sapina Tiarani",
            "jabatan" => "Anggota",
            "foto" => "sapina.gif",
            "divisi" => "seni",
        ],
        [
            "nama" => "Widya Hartanti",
            "jabatan" => "Anggota",
            "foto" => "hartanti.gif",
            "divisi" => "seni",
        ],
        [
            "nama" => "Arsya Ardana",
            "jabatan" => "Anggo",
            "foto" => "arsya.gif",
            "divisi" => "seni",
        ],
        [
            "nama" => "Siti Nurhaliza",
            "jabatan" => "Anggota",
            "foto" => "siti.gif",
            "divisi" => "seni",
        ],

        // Olahraga
        [
            "nama" => "Syahrul Ramadhana",
            "jabatan" => "Ketua",
            "foto" => "syahrul.gif",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "Abdul Rais",
            "jabatan" => "Anggota",
            "foto" => "rais.gif",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "Amir Azhari",
            "jabatan" => "Anggota",
            "foto" => "amir.gif",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "Ardhira Ramadhani",
            "jabatan" => "Anggota",
            "foto" => "ardhira.gif",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "M Agung Rinaldi",
            "jabatan" => "Anggota",
            "foto" => "agung.gif",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "Rahmita Ayu",
            "jabatan" => "Anggota",
            "foto" => "rahmita.gif",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "Sevia Ayuni",
            "jabatan" => "Anggota",
            "foto" => "sevia.gif",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "Ridho Kurniawan",
            "jabatan" => "Anggota",
            "foto" => "ridho.gif",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "M Fikri Juliandre",
            "jabatan" => "Anggota",
            "foto" => "fikri.gif",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "M Syahputra",
            "jabatan" => "Anggota",
            "foto" => "putra.gif",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "Syifa Ariqah",
            "jabatan" => "Anggota",
            "foto" => "arifa.gif",
            "divisi" => "olahraga",
        ],
    ];

    public static function all()
    {
        return collect(self::$pengurus);
    }

    public static function find($divisi)
    {
        $pengurus = static::all();

        return $pengurus->where('divisi', $divisi);
    }

    public static function find2()
    {
        $pengurus = static::all();

        return $pengurus->where('divisi', 'teras');
    }
}
