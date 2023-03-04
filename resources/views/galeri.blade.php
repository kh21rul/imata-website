@extends('layouts.main')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Galeri</h2>
          <ol>
            <li>Home</li>
            <li>Galeri</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

      <!-- ======= Galeri Section ======= -->
  <section id="galeri" class="galeri">
    <div class="container">

      <div class="section-title">
        <h2>Galeri</h2>
        <p>Galeri Kegiatan</p>
      </div>

      <div class="row content galeri-container">
        <div class="col-lg-12 galeri-item filter-app">
          <div id="susunan" class="justified-gallery">
            @foreach ($images as $image)
                @if (isset($image['image']) && isset($image['title']))
                  <a href="{{ asset('storage/' . $image['image']) }}" class="tampilkan">
                    <img src="{{ asset('storage/' . $image['image']) }}" alt="{{ $image['title'] }}">
                  </a>
                @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section><!-- End galeri Section -->
@endsection