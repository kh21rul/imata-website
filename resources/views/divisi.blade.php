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
                <p>Pengurus {{ $division->title }}</p>
            </div>

            <div class="row content justify-content-center">
                @foreach ($division->members as $member)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="pengurus">
                            <div class="pengurus-img">
                                @if ($member->photo)
                                    <img src="{{ asset('storage/' . $member->photo) }}" class="img-fluid"
                                        alt="{{ $member->name }}">
                                @else
                                    <img src="{{ asset('img/pengurus-default.png') }}" class="img-fluid"
                                        alt="pengurus-default">
                                @endif
                            </div>
                            <div class="pengurus-info">
                                <h4>{{ $member->name }}</h4>
                                <span>{{ $member->position }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- End Pengurus Section -->

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
