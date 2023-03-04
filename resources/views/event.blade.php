@extends('layouts.main')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Event</h2>
          <ol>
            <li>Home</li>
            <li>Event</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= event detail Section ======= -->
    <section id="Sejarah" class="blog">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-lg-7 accordion-body">
            <article class="entry">
              <h2 class="judul mt-4">
                Workshop Pemrograman django python
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>
              <img src="assets/img/0.jpg" alt="" width="500" class="img-fluid my-3">
              <div class="entry-content pb-5">
                <p>
                  <strong>Deskripsi </strong>: <br>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam laborum ullam soluta vel, cumque necessitatibus quam, repellat voluptate obcaecati hic praesentium quaerat? Voluptate, veritatis. Error, modi magni. Eum, reiciendis hic!
                </p>
              </div>
            </article>
          </div>

          <div class="col-lg-4 accordion-body">
            <article class="entry">
              <div class="entry-content">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between pt-3">
                      <div>
                          <h6>Tanggal : </h6>
                      </div>
                      <h6>12 November 2021</h6>
                  </li>
                  <li class="list-group-item d-flex justify-content-between pt-3">
                      <div>
                          <h6>Pukul : </h6>
                      </div>
                      <h6>13.00 WIB</h6>
                  </li>
                  <li class="list-group-item d-flex justify-content-between pt-3">
                      <div>
                          <h6>Lokasi : </h6>
                      </div>
                      <h6>Sekretariat Himatif</h6>
                  </li>
                </ul>
                <div class="d-grid gap-2 mt-4">
                  <a href="#" class="btn btn-success" type="button">Daftar</a>
                </div>
              </div>
            </article>
          </div>

        </div>
      </div>
    </section>
@endsection