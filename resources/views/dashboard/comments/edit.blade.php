@extends('dashboard.layouts.main')    
    
@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Edit Komentar</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="/dashboard/posts">Blog</a></div>
            <div class="breadcrumb-item"><a href="/dashboard/comments">Komentar</a></div>
            <div class="breadcrumb-item">Edit Komentar</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4>Form Edit Komentar</h4>
            </div>
            <div class="card-body">
              <form action="/dashboard/comments/{{ $comment->id }}" method="post">
                @method('put')
                @csrf
                <div class="form-group row mb-4">
                  <label for="name" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" required autofocus value="{{ old('name', $comment->name) }}">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label for="email" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required value="{{ old('email', $comment->email) }}">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label for="email" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Komentar</label>
                  <div class="col-sm-12 col-md-7">
                    <textarea name="body" style="height: 100px; overflow: auto;" id="body" class="form-control @error('body') is-invalid @enderror" required>{{ old('body', $comment->body) }}</textarea>
                    @error('body')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
