@extends('layouts.main')

@section('container')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Welcome to <span>IMATA</span></h1>
            <h2>IKATAN MAHASISWA ACEH TAMIANG</h2>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Selengkapnya <i class="bi bi-arrow-down"></i></a>
            </div>
        </div>
    </section><!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container mb-5 pb-3">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <img src="img/logo1.png" class="img-fluid" alt="himatif">
                </div>
            </div>
            <div class="row text-center justify-content-center mt-5">
                <h3>ikatan Mahasiswa Aceh Tamiang</h3>
                <p>Ikatan Mahasiswa Aceh Tamiang (IMATA) adalah sebuah organisasi yang terdiri dari mahasiswa-mahasiswa Aceh
                    Tamiang yang berkuliah di Lhokseumawe - Aceh Utara. IMATA bertujuan untuk mempererat tali silaturahmi
                    antara mahasiswa Aceh Tamiang, serta untuk memajukan dan mengembangkan potensi-potensi yang ada di Aceh
                    Tamiang.</p>
            </div>
        </div>
        <div class="container">
            <div class="row content">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img src="{{ asset('img/contoh.jpg') }}" class="img-fluid foto" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h2>Profil</h2>
                                <p>Visi</p>
                            </div>
                            <p>
                                Bersama- sama membangun Ikatan Mahasiswa Aceh Tamiang yang berbasiskan kekeluargaan, dan
                                kemahasiswaan, dengan menjunjung semangat, koordinasi dan komunikasi sehingga mampu
                                membentuk karakter generasi muda yang adaptif, apresiatif, dan progresif.
                            </p>
                        </div>
                        <div class="col-12">
                            <div class="section-title">
                                <p>Misi</p>
                            </div>
                            <p>
                                Untuk mencapai visi tersebut, berikut beberapa misi yang dilakukan oleh IMATA Lhokseumawe -
                                Aceh Utara :
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all text-warning"></i> Membangun kultur berpikir dan berhimpun
                                    yang didasari tujuan IMATA, dilakukan secara bersama-sama, dengan dukungan komunikasi
                                    yang baik, koordinasi yang terpusat, dan semangat yang bertanggungjawab.</li>
                                <li><i class="bi bi-check2-all text-warning"></i> Menumbuhkan kepekaan, fleksibilitas, dan
                                    integritas yang bertanggungjawab sehingga terbentuk karakter IMATA yang mampu
                                    beradaptasi terhadap perubahan.</li>
                                <li><i class="bi bi-check2-all text-warning"></i> Menumbuhkan rasa empati dan toleransi
                                    dalam tubuh IMATA sehingga setiap anggota nyamampu mengapresiasi diri sendiri maupun
                                    orang lain</li>
                                <li><i class="bi bi-check2-all text-warning"></i> Menumbuhkan sikap kritis yang disertai
                                    sikap solutif dan inovatif yang diwujudkan secara professional dengan tindakan nyata
                                    sehingga mapu membentuk karakter manusia yang progresif</li>
                                <li><i class="bi bi-check2-all text-warning"></i> Membuat IMATA Lhokseumawe – Aceh Utara
                                    lebih terkenal dikalangan Aceh Tamiang khususnya, dan Aceh pada umumnya.</li>
                                <li><i class="bi bi-check2-all text-warning"></i> Membangun karakter yang progresif
                                    dikalangan pemuda Aceh Tamiang.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= teras Section ======= -->
    <section id="teras" class="teras">
        <div class="container" data-aos="fade-up">

            <div class="section-title-kanan">
                <h2>Pengurus</h2>
                <p>Pengurus Teras</p>
            </div>

            <div class="row content justify-content-center">
                @foreach ($divisi as $d)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="pengurus">
                            <div class="pengurus-img">
                                @if (file_exists(public_path('img/foto-pengurus/' . $d['foto'])))
                                    <img src="{{ asset('img/foto-pengurus/' . $d['foto']) }}" class="img-fluid"
                                        alt="{{ $d['nama'] }}">
                                @else
                                    <img src="{{ asset('img/foto-pengurus/pengurus-default.png') }}" class="img-fluid"
                                        alt="pengurus-default">
                                @endif
                            </div>
                            <div class="pengurus-info">
                                <h4>{{ $d['nama'] }}</h4>
                                <span>{{ $d['jabatan'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End teras Section -->

    <!-- ======= divisi Section ======= -->
    <section id="Divisi" class="divisi">
        <div class="container">

            <div class="section-title">
                <h2>Divisi</h2>
                <p>Divisi</p>
            </div>

            <div class="row content justify-content-center">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
                    <div class="icon-box">
                        <h4 class="title"><a href="/divisi/koordinator">KOORDINATOR WILAYAH</a></h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
                    <div class="icon-box">
                        <h4 class="title"><a href="/divisi/agama">AGAMA</a></h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
                    <div class="icon-box">
                        <h4 class="title"><a href="/divisi/kaderisasi">KADERISASI</a></h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
                    <div class="icon-box">
                        <h4 class="title"><a href="/divisi/sekretariat">KESEKRETARIATAN</a></h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
                    <div class="icon-box">
                        <h4 class="title"><a href="/divisi/infokom">INFORMASI DAN KOMUNIKASI</a></h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
                    <div class="icon-box">
                        <h4 class="title"><a href="/divisi/humas">HUBUNGAN MASYARAKAT</a></h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
                    <div class="icon-box">
                        <h4 class="title"><a href="/divisi/kwh">KEWIRAUSAHAAN</a></h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
                    <div class="icon-box">
                        <h4 class="title"><a href="/divisi/seni">SENI DAN BUDAYA</a></h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
                    <div class="icon-box">
                        <h4 class="title"><a href="/divisi/olahraga">Pemuda dan Olahraga</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End divisi Section -->

    <!-- ======= berita Section ======= -->
    <section id="berita" class="berita">
        <div class="container">

            <div class="section-title text-center">
                <p>Berita</p>
                <span>Dapatkan Berita terbaru mengenai kegiatan IMATA</span>
            </div>
            <div class="row content">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="card">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
                            @else
                                <img src="{{ url('img/contoh.jpg') }}" class="card-img-top" alt="...">
                            @endif
                            <div class="card-body">
                                <small class="bi bi-calendar-check"> {{ $post->created_at->format('d M Y') }}</small>
                                <h4 class="title"><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h4>
                                <p class="card-text">{{ $post->excerpt }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="/blog" class="btn btn-warning tombol">Lihat Berita Lainnya <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>


        </div>
    </section><!-- End berita Section -->

    <!-- kontak -->
    <section id="kontak" class="kontak">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-lg-5">
                            <div class="row">
                                <div class="col-lg-6 mb-5">
                                    <form action="#">
                                        <h3>Kontak Kami</h3>
                                        <div class="row g-2 mt-4 mb-3">
                                            <div class="col-md">
                                                <label for="name" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Nama" required>
                                            </div>
                                            <div class="col-md">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="subject" class="form-label">Subjek</label>
                                            <input type="text" class="form-control" id="subject" name="subject"
                                                placeholder="Subjek" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message" class="form-label">Pesan</label>
                                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tulis Pesan Anda ..."
                                                required></textarea>
                                            </pre>
                                        </div>
                                        @if (Session::has('status'))
                                            <div class="alert alert-warning">{{ Session::get('status') }}</div>
                                        @endif
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-warning text-light mt-5" name="kirim"
                                                type="button">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Hubungi Kami</h3>
                                    <div class="pt-1">
                                        <p><i class="bi bi-telephone-fill"></i> : +62 821-8192-3565 <br>
                                            <i class="bi bi-envelope-fill"></i> : imatalhokacut@gmail.com <br>
                                            <i class="bi bi-geo-alt-fill"></i> : Lhokseumawe - Aceh Utara, Aceh, Indonesia
                                        </p>
                                    </div>
                                    <h3 class="mt-4 pb-1">Lokasi Kami</h3>
                                    <div class="embed-responsive embed-responsive-21by9 ratio ratio-21x9 mb-5">
                                        <iframe
                                            src="https://maps.google.com/maps?q=Lhokseumawe&t=&z=10&ie=UTF8&iwloc=&output=embed"
                                            style="border:0;" allowfullscreen="" loading="lazy" height="500"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
