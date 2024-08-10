<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="/" class="logo"><img src="{{ url('img/logo4.png') }}" alt="Logo"></a>
        <nav id="navbar" class="navbar">
            <ul class="nav-item">
                <li><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
                <li class="dropdown {{ Request::is('sejarah') || Request::is('divisi*') ? 'active' : '' }}"><a
                        href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/sejarah">Sejarah</a></li>
                        <li class="dropdown"><a href="#"><span>Kepengurusan</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                @php
                                    $divisions = app(\App\Models\Division::class)
                                        ->orderByRaw('CAST(sort AS UNSIGNED)')
                                        ->get();
                                @endphp
                                @foreach ($divisions as $division)
                                    <li><a href="/divisi/{{ $division->slug }}">{{ $division->title }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="/blog">Blog</a></li>
                <li><a class="nav-link {{ Request::is('toko') ? 'active' : '' }}" href="/toko">Shop</a></li>
                <li><a class="nav-link {{ Request::is('galeri') ? 'active' : '' }}" href="/galeri">Galeri</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
