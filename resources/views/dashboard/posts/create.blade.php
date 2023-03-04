@extends('dashboard.layouts.main')

@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tambah Post</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="/dashboard/posts">Blog</a></div>
        <div class="breadcrumb-item">Tambah-Post</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Form tambah post</h4>
            </div>
            <div class="card-body">
              <form action="/dashboard/posts" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="title">Judul</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
                    @error('title')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row mb-4 hidden">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="slug">Slug</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
                    @error('slug')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="Category">Kategori</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control select2" name="category_id" required>
                      <option selected>Pilih Kategori</option>
                      @foreach ($categories->reverse() as $category)
                        @if (old('category_id') == $category->id)
                          <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                      @endforeach
                    </select>
                    @error('category_id')
                      <span class="invalid" role="alert">
                        <small class="text-danger">Silahkan pilih kategori terlebih dahulu</small>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tag</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control select2" multiple="" name="tags[]" required>
                      @foreach ($tags->reverse() as $tag)
                        <option value="{{ $tag->id }}" {{ in_array($tag->id, old('tags', [])) ? 'selected' : '' }}>{{ $tag->name }}</option>
                      @endforeach
                    </select>
                    @error('tags[]')
                      <span class="invalid" role="alert">
                        <small class="text-danger">{{ $message }}</small>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="image">Gambar</label>
                  <div class="col-sm-12 col-md-7">
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input type="file" accept="image/*" name="image" class="form-control @error('image') is-invalid @enderror" id="image" onchange="previewImage()">
                    @error('image')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="body">Isi</label>
                  <div class="col-sm-12 col-md-7">
                    @error('body')
                      <span class="invalid" role="alert">
                        <small class="text-danger">{{ $message }}</small>
                      </span>
                    @enderror
                    <textarea class="summernote @error('body') is-invalid @enderror" name="body" id="body">{{ old('body') }}</textarea>
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

  <script>
    const title = document.getElementById('title');
    const slug = document.getElementById('slug');

    title.addEventListener('change', function(e) {
      fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block'; 

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      };
    }
  </script>
@endsection