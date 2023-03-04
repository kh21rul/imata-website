@extends('layouts.main')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li>Home</li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">
        <div class="section-title">
          <h2>Blog</h2>
          <p>{{ $title }}</p>
          <!-- <p>Kategori : Artikel</p> -->
          <!-- <p>Tags : Teknologi</p> -->
          <!-- <p>Search : test</p> -->
        </div>
        <div class="row justify-content-center">

          {{-- Searching --}}
          <div class="search col-lg-10 my-4 pb-4">
            <form action="/blog">
              @if (request('category')) 
                  <input type="hidden" name="category" value="{{ request('category') }}">
              @endif
              @if (request('tag')) 
                  <input type="hidden" name="tag" value="{{ request('tag') }}">
              @endif
              @if (request('author')) 
                  <input type="hidden" name="author" value="{{ request('author') }}">
              @endif
              <div class="input-group">
                <input type="text" class="form-control form-control-lg" placeholder="Mau Cari Apa ? " name="search" value="{{ request('search') }}">
                <div class="input-group-append">
                  <button class="btn btn-warning" type="submit"><i class="bi bi-search"></i> Search</button>
                </div>
            </div>
            </form>
          </div>

          @if ($posts->count())
              <div class="mb-3 entries">
                <article class="thumb">
                <div style="max-height: 400px; overflow:hidden;">
                  @if ($posts[0]->image)
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->title }}" class="img-fluid">
                  @else
                    <img src="{{ url('img/contoh.jpg') }}" class="highlight" alt="...">
                  @endif
                </div>
                <div class="card-body text-center">
                  <h5 class="entry-title">
                    <a href="/blog/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a>
                  </h5>
                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="/blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i>{{ $posts[0]->created_at->format('H:i') }}</li>
                      <li class="d-flex align-items-center"><i class="bi bi-calendar-check"></i>{{ $posts[0]->created_at->format('d M Y') }}</li>
                      <li class="d-flex align-items-center"><i class="bi bi-bookmarks"></i> <a href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></li>
                    </ul>
                  </div>
                  <p class="card-text">{{ $posts[0]->excerpt }}</p>
                </div>
                </article>
              </div>

          @foreach($posts->skip(1) as $post)
          <div class="col-lg-4 col-md-6 entries">
            <article class="entry">
              <div class="entry-img">
                @if ($post->image)
                  <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                @else
                  <img src="{{ url('img/contoh.jpg') }}" alt="" class="img-fluid">
                @endif
              </div>
              <h2 class="entry-title">
                <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-calendar-check"></i>{{ $post->created_at->format('d M Y') }}</li>
                  <li class="d-flex align-items-center"><i class="bi bi-bookmarks"></i> <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></li>
                </ul>
              </div>
              <div class="entry-content">
                <p>
                  {{ $post->excerpt }}
                </p>
              </div>
            </article><!-- End blog entry -->
          </div>
          @endforeach

          @else
              <div class="alert alert-info">
                <strong>! Keyword yang dicari tidak ditemukan.</strong> 
              </div>
          @endif

        </div><!-- End blog entries list -->
  
        <!-- Pagination -->

        {{ $posts->links() }}
        
        {{-- End Pagination --}}

      </div>
    </section><!-- End Blog Section -->
@endsection