<!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="/" class="logo"><img src="{{ url('img/logo4.png') }}" alt="Logo"></a>
      <nav id="navbar" class="navbar">
        <ul class="nav-item">
          <li><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
          <li class="dropdown {{ Request::is('sejarah') || Request::is('divisi*') ? 'active' : '' }}"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/sejarah">Sejarah</a></li>
              <li class="dropdown"><a href="#"><span>Kepengurusan</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/divisi/teras">Teras</a></li>
                  <li><a href="/divisi/koordinator">Koordinator</a></li>
                  <li><a href="/divisi/agama">Agama</a></li>
                  <li><a href="/divisi/kaderisasi">Kaderisasi</a></li>
                  <li><a href="/divisi/sekretariat">Kesekretariatan</a></li>
                  <li><a href="/divisi/infokom">Infokom</a></li>
                  <li><a href="/divisi/humas">Humas</a></li>
                  <li><a href="/divisi/kwh">Kewirausahaan</a></li>
                  <li><a href="/divisi/seni">Seni dan Budaya</a></li>
                  <li><a href="/divisi/olahraga">Pemuda dan Olahraga</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="/blog">Blog</a></li>
          <li><a class="nav-link {{ Request::is('toko') ? 'active' : '' }}" href="/toko">Shop</a></li>
          {{-- <li><a class="nav-link {{ ($active === 'events') ? 'active' : '' }}" href="/events">Event</a></li> --}}
          {{-- <li><a class="nav-link {{ ($active === 'prestasi') ? 'active' : '' }}" href="/prestasi">Prestasi</a></li> --}}
          <li><a class="nav-link {{ Request::is('galeri') ? 'active' : '' }}" href="/galeri">Galeri</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->