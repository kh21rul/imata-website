@extends('dashboard.layouts.main')

@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">Dashboard</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12 mb-4">
          <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="dbuser/assets/img/bg.jpg" style="background-image: url(&quot;dbuser/assets/img/unsplash/andre-benz-1214056-unsplash.jpg&quot;);">
            <div class="hero-inner">
              <h2>Hi, {{ auth()->user()->name }}!</h2>
              <p class="lead">Good Morning, Have an nice day</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          {{-- <div class="row">
            <div class="col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Pengunjung Bulan Lalu</h4>
                  </div>
                  <div class="card-body">
                    59
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Pengunjung Bulan Ini</h4>
                  </div>
                  <div class="card-body">
                    59
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Statistik Pengunjung</h4>
                </div>
                <div class="card-body">
                  <canvas id="myChart2"></canvas>
                </div>
              </div>
            </div>
          </div> --}}
          <div class="row">
            <div class="col-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h4 class="text-primary">Postingan Terbaru</h4>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tbody><tr>
                        <th>NO</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Komentar</th>
                      </tr>
                      @php
                        $start = ($posts->currentPage() - 1) * $posts->perPage() + 1;
                      @endphp
                      @foreach ($posts as $post)
                        <tr>
                          <td>{{ $start++ }}</td>
                          <td class="font-weight-600" width="50%">{{ $post->title }}</td>
                          <td>{{ $post->category->name }}</td>
                          <td>{{ $post->comments->count() }}</td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                    <div class="ml-4">
                      {{ $posts->appends(['start' => $start])->links() }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-awal">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Post</h4>
                  </div>
                  <div class="card-body">
                    {{ $totalPosts }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Event</h4>
                  </div>
                  <div class="card-body">
                    0
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Shop</h4>
                  </div>
                  <div class="card-body">
                    {{ $products->count() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="card">
            <div class="card-header">
              <h4>Log Aktivitas</h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled list-unstyled-border">
                <li class="media">
                  <img class="mr-3 rounded-circle" width="50" src="dbuser/assets/img/avatar/avatar-1.png" alt="avatar">
                  <div class="media-body">
                    <div class="float-right text-primary">Now</div>
                    <div class="media-title">Farhan A Mujib</div>
                    <span class="text-small text-muted">Admin</span>
                  </div>
                </li>
                <li class="media">
                  <img class="mr-3 rounded-circle" width="50" src="dbuser/assets/img/avatar/avatar-4.png" alt="avatar">
                  <div class="media-body">
                    <div class="float-right">12m</div>
                    <div class="media-title">Ujang Maman</div>
                    <span class="text-small text-muted">Author</span>
                  </div>
                </li>
                <li class="media">
                  <img class="mr-3 rounded-circle" width="50" src="dbuser/assets/img/avatar/avatar-4.png" alt="avatar">
                  <div class="media-body">
                    <div class="float-right">12m</div>
                    <div class="media-title">Ujang Maman</div>
                    <span class="text-small text-muted">Author</span>
                  </div>
                </li>
                <li class="media">
                  <img class="mr-3 rounded-circle" width="50" src="dbuser/assets/img/avatar/avatar-3.png" alt="avatar">
                  <div class="media-body">
                    <div class="float-right text-primary">Now</div>
                    <div class="media-title">Farhan A Mujib</div>
                    <span class="text-small text-muted">Kewirausahaan</span>
                  </div>
                </li>
                <li class="media">
                  <img class="mr-3 rounded-circle" width="50" src="dbuser/assets/img/avatar/avatar-3.png" alt="avatar">
                  <div class="media-body">
                    <div class="float-right">12m</div>
                    <div class="media-title">Ujang Maman</div>
                    <span class="text-small text-muted">Kewirausahaan</span>
                  </div>
                </li>
                <li class="media">
                  <img class="mr-3 rounded-circle" width="50" src="dbuser/assets/img/avatar/avatar-4.png" alt="avatar">
                  <div class="media-body">
                    <div class="float-right">12m</div>
                    <div class="media-title">Ujang Maman</div>
                    <span class="text-small text-muted">Author</span>
                  </div>
                </li>
              </ul>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
