@extends('layouts.main')

@section('container')
<!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Sejarah</h2>
          <ol>
            <li>Home</li>
            <li>Sejarah</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Sejarah Section ======= -->
    <section id="Sejarah" class="blog">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-lg-9 accordion-body">
            <article class="entry">
              <div class="entry-img text-center">
                <img src="img/logo.png" width="300" alt="" class="img-fluid py-5 my-5">
              </div>
              <div class="px-lg-5">
                <h2 class="judul">
                  Sejarah IMATA
                </h2>
              </div>
              <div class="entry-content pb-5 px-lg-5">
                      {!! $content !!}
              </div>
            </article><!-- End Sejarah entry -->
          </div>

        </div><!-- End Sejarah entries list -->
      </div>
    </section><!-- End Sejarah Section -->
@endsection