<?php

namespace App\Models;

class Divisi
{
    private static $pengurus = [
        // Teras
        [
            "nama" => "Aliem Maharits",
            "jabatan" => "Ketua Umum",
            "foto" => "aliem.png",
            "divisi" => "teras",
        ],
        [
            "nama" => "Atururi Husaini Fadillah",
            "jabatan" => "Wakil Ketua Umum",
            "foto" => "fadil.png",
            "divisi" => "teras",
        ],
        [
            "nama" => "Rezkya Nurdiani",
            "jabatan" => "Sekretaris Umum",
            "foto" => "diani.png",
            "divisi" => "teras",
        ],
        [
            "nama" => "Meisya Athaya",
            "jabatan" => "Bendahara Umum",
            "foto" => "meisya.png",
            "divisi" => "teras",
        ],

        // Koordinator
        [
            "nama" => "Hary Setiawan",
            "jabatan" => "Koordinator Bukit Indah",
            "foto" => "hary.png",
            "divisi" => "koordinator",
        ],
        [
            "nama" => "Deni Ariadi",
            "jabatan" => "Koordinator Reuleut",
            "foto" => "deni.png",
            "divisi" => "koordinator",
        ],
        [
            "nama" => "M. Ridha Irvan",
            "jabatan" => "Koordinator Poltek",
            "foto" => "irvan.png",
            "divisi" => "koordinator",
        ],
        [
            "nama" => "M. Rifky Abdallah Syafendi",
            "jabatan" => "Koordinator IAIN",
            "foto" => "rifky.png",
            "divisi" => "koordinator",
        ],
        [
            "nama" => "Putri Raudhatul Muna",
            "jabatan" => "Koordinator Poltekkes",
            "foto" => "putri.png",
            "divisi" => "koordinator",
        ],
        [
            "nama" => "Muhammad Jeskin Namuska",
            "jabatan" => "Koordinator Kota",
            "foto" => "jeskin.png",
            "divisi" => "koordinator",
        ],

        // Agama
        [
            "nama" => "Zulfikri",
            "jabatan" => "Ketua Bidang",
            "foto" => "zulfikri.png",
            "divisi" => "agama",
        ],
        [
            "nama" => "Putri Maulida",
            "jabatan" => "Sekretaris Bidang",
            "foto" => "maulida.png",
            "divisi" => "agama",
        ],
        [
            "nama" => "Yusril",
            "jabatan" => "Anggota",
            "foto" => "yusril.png",
            "divisi" => "agama",
        ],
        [
            "nama" => "Nadia amanda",
            "jabatan" => "Anggota",
            "foto" => "amanda.png",
            "divisi" => "agama",
        ],
        [
            "nama" => "Ramadhania",
            "jabatan" => "Anggota",
            "foto" => "ramadhania.png",
            "divisi" => "agama",
        ],

        // Kaderisasi
        [
            "nama" => "Tri Suhandina ",
            "jabatan" => "Ketua Bidang",
            "foto" => "tri.png",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Ihsan Zul Ansar",
            "jabatan" => "Sekretaris Bidang",
            "foto" => "ihsan.png",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Aldi Juwanda",
            "jabatan" => "Anggota",
            "foto" => "aldi.png",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Arlian Ramadhan",
            "jabatan" => "Anggota",
            "foto" => "arlian.png",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Darmala Hayati",
            "jabatan" => "Anggota",
            "foto" => "darmala.png",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Putri Ulfah Syaridha",
            "jabatan" => "Anggota",
            "foto" => "ulfah.png",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Rizki Iqbal Fauzi",
            "jabatan" => "Anggota",
            "foto" => "fauzi.png",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Srey Nazwa Dian Madina",
            "jabatan" => "Anggota",
            "foto" => "nazwa.png",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Syabina Putri Rahma",
            "jabatan" => "Anggota",
            "foto" => "syabina.png",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Yadika Atmaja",
            "jabatan" => "Anggota",
            "foto" => "yadika.png",
            "divisi" => "kaderisasi",
        ],

        // Kesekretariatan
        [
            "nama" => "Wanda Baskoro",
            "jabatan" => "Ketua Bidang",
            "foto" => "wanda.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Dinda Pratiwi",
            "jabatan" => "Sekretaris Bidang",
            "foto" => "dinda.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Andini",
            "jabatan" => "Anggota",
            "foto" => "andini.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Delia Permata Sari",
            "jabatan" => "Anggota",
            "foto" => "delia.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Meisya Aprilia",
            "jabatan" => "Anggota",
            "foto" => "aprilia.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Mutia Sari",
            "jabatan" => "Anggota",
            "foto" => "mutia.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Nurafni",
            "jabatan" => "Anggota",
            "foto" => "nurafni.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Samsul Bahri",
            "jabatan" => "Anggota",
            "foto" => "samsul.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Srik Wardhani",
            "jabatan" => "Anggota",
            "foto" => "srik.png",
            "divisi" => "sekretariat",
        ],

        // Infokom
        [
            "nama" => "Silvia Masyitah",
            "jabatan" => "Ketua Bidang",
            "foto" => "silvia.png",
            "divisi" => "infokom",
        ],
        [
            "nama" => "Luna Firriyal",
            "jabatan" => "Sekretaris Bidang",
            "foto" => "luna.png",
            "divisi" => "infokom",
        ],
        [
            "nama" => "Zulhiz Tami",
            "jabatan" => "Anggota",
            "foto" => "tami.png",
            "divisi" => "infokom",
        ],
        [
            "nama" => "Alfiya Balqis",
            "jabatan" => "Anggota",
            "foto" => "alfiya.png",
            "divisi" => "infokom",
        ],
        [
            "nama" => "Mawwaddah",
            "jabatan" => "Anggota",
            "foto" => "mawwaddah.png",
            "divisi" => "infokom",
        ],

        // Humas 
        [
            "nama" => "Ridho Kurniawan",
            "jabatan" => "Ketua Bidang",
            "foto" => "ridho.png",
            "divisi" => "humas",
        ],
        [
            "nama" => "Juwita Ramaini",
            "jabatan" => "Sekretaris Bidang",
            "foto" => "ramaini.png",
            "divisi" => "humas",
        ],
        [
            "nama" => " Risma Yulita",
            "jabatan" => "Anggota",
            "foto" => "risma.png",
            "divisi" => "humas",
        ],
        [
            "nama" => "M. Firdaus",
            "jabatan" => "Anggota",
            "foto" => "firdaus.png",
            "divisi" => "humas",
        ],
        [
            "nama" => "Muhammad Havid",
            "jabatan" => "Anggota",
            "foto" => "havid.png",
            "divisi" => "humas",
        ],
        [
            "nama" => "Najwa Sakila Parmanta",
            "jabatan" => "Anggota",
            "foto" => "najwa.png",
            "divisi" => "humas",
        ],
        [
            "nama" => "Yurika Tri Amanda",
            "jabatan" => "Anggota",
            "foto" => "yurika.png",
            "divisi" => "humas",
        ],
        [
            "nama" => "Rahmadhatulah Rafi Maulana",
            "jabatan" => "Anggota",
            "foto" => "maulana.png",
            "divisi" => "humas",
        ],
        [
            "nama" => "Sulastri Ardhan",
            "jabatan" => "Anggota",
            "foto" => "sulastri.png",
            "divisi" => "humas",
        ],

        // kwh
        [
            "nama" => "Aji Priansyah",
            "jabatan" => "Ketua Bidang",
            "foto" => "aji.png",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Natasya Riska Amalia Hardi",
            "jabatan" => "Sekretaris Bidang",
            "foto" => "amalia.png",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Cindi Maharani",
            "jabatan" => "Anggota",
            "foto" => "cindi.png",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Dwiyana Anggreini",
            "jabatan" => "Anggota",
            "foto" => "dwiyana.png",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Erna Harmadani",
            "jabatan" => "Anggota",
            "foto" => "erna.png",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Nurjanah",
            "jabatan" => "Anggota",
            "foto" => "nurjanah.png",
            "divisi" => "kwh",
        ],

        // Seni
        [
            "nama" => "Anggi Syafitri",
            "jabatan" => "Ketua",
            "foto" => "anggi.png",
            "divisi" => "seni",
        ],
        [
            "nama" => "Darmi Samosir",
            "jabatan" => "Sekretaris Bidang",
            "foto" => "darmi.png",
            "divisi" => "seni",
        ],
        [
            "nama" => "Ade Meliza Tri Amanda",
            "jabatan" => "Anggota",
            "foto" => "meliza.png",
            "divisi" => "seni",
        ],
        [
            "nama" => "Desi Syafitri",
            "jabatan" => "Anggota",
            "foto" => "desi.png",
            "divisi" => "seni",
        ],
        [
            "nama" => "Frety Sri Rizki",
            "jabatan" => "Anggota",
            "foto" => "frety.png",
            "divisi" => "seni",
        ],
        [
            "nama" => "Indah Ayu Lestari",
            "jabatan" => "Anggota",
            "foto" => "indah.png",
            "divisi" => "seni",
        ],
        [
            "nama" => "Yasya Almira",
            "jabatan" => "Anggota",
            "foto" => "almira.png",
            "divisi" => "seni",
        ],
        [
            "nama" => "Yunita Anggraeni Simatupang",
            "jabatan" => "Anggota",
            "foto" => "yunita.png",
            "divisi" => "seni",
        ],

        // Olahraga
        [
            "nama" => "M. Syahputra",
            "jabatan" => "Ketua Bidang",
            "foto" => "syahputra.png",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "Dwi ariska",
            "jabatan" => "Sekretaris Bidang",
            "foto" => "ariska.png",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "Muhammad Sufardan",
            "jabatan" => "Anggota",
            "foto" => "sufardan.png",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "Putra Taufiqurrahman Ariza",
            "jabatan" => "Anggota",
            "foto" => "taufiq.png",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "Tito Gilang Samudra",
            "jabatan" => "Anggota",
            "foto" => "tito.png",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "Muhammad Maizaki",
            "jabatan" => "Anggota",
            "foto" => "maizaki.png",
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
