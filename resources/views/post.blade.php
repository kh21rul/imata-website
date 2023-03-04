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
    <section id="blog" class="blog blog-detail">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-lg-9 accordion-body">
            <article class="entry">
              <div class="entry-img" style="max-height: 350px; overflow:hidden;" >
                @if ($post->image)
                  <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
                @else
                  <img src="{{ url('img/contoh.jpg') }}" alt="" class="img-fluid">
                @endif
              </div>
              <div class="my-5 px-lg-5">
                <h2 class="judul">
                  {{ $post->title }}
                </h2>
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-calendar-check"></i> {{ $post->created_at->format('d M Y') }}</li>
                    <li class="d-flex align-items-center"><i class="bi bi-bookmarks"></i> <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></li>
                  </ul>
                </div>
              </div>
              <div class="entry-content pb-3 px-lg-5">

                  {!! $post->body !!}
                
                <div class="tag">
                  <i class="bi bi-tags"></i>Tags:
                  @foreach ($post->tags as $tag)
                    <a href="/blog?tag={{ $tag->slug }}" class="bg-light mx-1">#{{ $tag->name }}</a>     
                  @endforeach
                </div>
              </div>
              <div class="share px-lg-5 my-4">
                <hr>
                <strong class="me-3">Share : </strong>
                <a href="whatsapp://send?text={{urlencode('Check out this post: '. route('post', $post->slug) . ' #' . $post->title)}}" class="btn wa mb-2 mb-lg-0" style="background-color: green; color: white;"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}&picture={{ urlencode(asset('storage/' . $post->image)) }}" class="btn fb mb-2 mb-lg-0"><i class="bi bi-facebook"></i> Facebook</a>
				        <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::url()) }}&text={{ urlencode($post->title) }}&hashtags={{ urlencode($post->category->name) }}" class="btn tw mb-2 mb-lg-0"><i class="bi bi-twitter"></i> Twitter</a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(Request::url()) }}&title={{ urlencode($post->title) }}&summary={{ urlencode($post->excerpt) }}&source={{ urlencode(config('app.name')) }}&picture={{ urlencode(asset('storage/' . $post->image)) }}" class="btn in mb-2 mb-lg-0"><i class="bi bi-linkedin"></i> Linkedin</a>
                <hr>
              </div>
            </article><!-- End blog entry -->
          </div>

        </div><!-- End blog entries list -->
      </div>
    </section><!-- End Blog Section -->

    
    <section class="komen komen-form">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <h2>Komentar</h2>
            <hr>
            <a href="#" class="text-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i> Tambahkan Komentar</a>
            @foreach ($post->comments->sortByDesc('created_at') as $comment)
                <div class="card  card-review mt-4 pl-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1 p-2">
                            <img src="{{ url('img/user.svg') }}" alt="user">
                        </div>
                        <div class="col-md-11 ">
                            <h4>{{ $comment->name }}</h4>
                            <span class="text-muted bi bi-calendar-check">  {{ $comment->created_at->format('d M Y') }}</span>
                            <p class="pt-3">{{ $comment->body }}</p>
                        </div>
                    </div>  
                </div>
            </div>
            @endforeach
            <!---------------Modal----------------------->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body p-5">
                                <form method="post" action="/blog/{{ $post->slug }}/comments">
                                    @csrf
                                    <h2 class="mb-4">Tulis Komentar</h2>
                                    <div class="form-group mb-3">
                                        <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Nama" id="name" name="name" required >
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                      </div>
                                    <div class="form-group mb-3">
                                      <input class="form-control @error('email') is-invalid @enderror" type="email"  placeholder="Email" id="email" name="email" required >
                                      @error('email')
                                          <div class="invalid-feedback">
                                              {{ $message }}
                                          </div>
                                      @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <pre><textarea class="form-control @error('body') is-invalid @enderror" placeholder="Tulis Komentarmu" row="1" id="body" name="body" required ></textarea></pre>
                                        @error('body')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-warning">Kirim</button>
                                        <button class="btn btn-light " data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>                    
                            </div>
                        </div>
                    </div>
                </div>
            <!--------------- end Modal----------------------->

          </div>
        </div>
      </div>
    </section>  
@endsection