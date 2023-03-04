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

      <!-- ======= event Section ======= -->
    <section class="event">
      <div class="container">

        <div class="section-title">
          <h2>Event</h2>
          <p>Jadwal Event</p>
        </div>

        <div class="row">
          <div class="col-lg-6 mb-lg-2">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/0.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body p-4">
                    <h5 class="card-title"><a href="detail-event.html">Workshop Pemrograman django python</a></h5>
                    <div class="mb-3">
                      <span class="badge bg-success">05 Maret 2022</span>
                      <span class="badge bg-warning">13.00 WIB</span>
                      <span class="badge bg-danger">Selesai</span>
                    </div>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content...</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-lg-2">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/contoh2.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><a href="detail-event.html">Workshop Pemrograman python</a></h5>
                    <div class="mb-3">
                      <span class="badge bg-success">05 Maret 2022</span>
                      <span class="badge bg-warning">13.00 WIB</span>
                      <span class="badge bg-danger">Selesai</span>
                    </div>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content...</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-lg-2">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/contoh.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body p-4">
                    <h5 class="card-title"><a href="detail-event.html">Workshop Pemrograman django python</a></h5>
                    <div class="mb-3">
                      <span class="badge bg-success">05 Maret 2022</span>
                      <span class="badge bg-warning">13.00 WIB</span>
                    </div>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content...</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-lg-2">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/contoh2.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><a href="detail-event.html">Workshop Pemrograman python</a></h5>
                    <div class="mb-3">
                      <span class="badge bg-success">05 Maret 2022</span>
                      <span class="badge bg-warning">13.00 WIB</span>
                    </div>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content...</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 mt-5">
            <nav aria-label="...">
              <ul class="pagination  justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
@endsection