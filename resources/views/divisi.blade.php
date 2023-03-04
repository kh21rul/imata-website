@extends('layouts.main')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Kepengurusan</h2>
          <ol>
            <li>Home</li>
            <li>Kepengurusan</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

      <!-- ======= pengurusu Section ======= -->
  <section id="Pengurus" class="Pengurus teras">
    <div class="container">

      <div class="section-title">
        <h2>Pengurus</h2>
        <p>{{ $nama_divisi }}</p>
      </div>

      <div class="row content justify-content-center">
        @foreach ($divisi as $d)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="pengurus">
            <div class="pengurus-img">
              @if (file_exists(public_path('img/foto-pengurus/'.$d["foto"])))
                <img src="{{ asset('img/foto-pengurus/'.$d["foto"]) }}" class="img-fluid" alt="{{ $d["nama"] }}">
              @else
                <img src="{{ asset('img/foto-pengurus/pengurus-default.png') }}" class="img-fluid" alt="pengurus-default">
              @endif
            </div>
            <div class="pengurus-info">
              <h4>{{ $d["nama"] }}</h4>
              <span>{{ $d["jabatan"] }}</span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section><!-- End Pengurus Section -->

  {{-- <section class="progja">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="section-title">
            <p>Program Kerja</p>
          </div>
          <ul class="progja-list">
            <li>
              <div class="data">Non consectetur a erat nam at lectus urna duis? </div>
            </li>
            <li>
              <div class="data">Non consectetur a erat nam at lectus urna duis? </div>
            </li>
            <li>
              <div class="data">Non consectetur a erat nam at lectus urna duis? </div>
            </li>
            <li>
              <div class="data">Non consectetur a erat nam at lectus urna duis? </div>
            </li>
            <li>
              <div class="data">Non consectetur a erat nam at lectus urna duis? </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </section><!-- End Pengurus Section --> --}}
@endsection