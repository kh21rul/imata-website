@extends('dashboard.layouts.main')    
    
@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Tags</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="/dashboard/posts">Blog</a></div>
            <div class="breadcrumb-item"><a href="/dashboard/tags">Tags</a></div>
            <div class="breadcrumb-item">Edit-Tag</div>
        </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Edit Kategori</h4>
                        </div>
                        <div class="card-body">
                            <form action="/dashboard/tags/{{ $tag->slug }}" method="post">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Jenis Kategori" id="name" name="name" required autofocus value="{{ old('name', $tag->name) }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span> 
                                    @enderror
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug" id="slug" name="slug" required value="{{ old('slug', $tag->slug) }}">
                                    @error('slug')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                    <div class="input-group-append">
                                    <button class="btn btn-success" type="submit"><i class="fas fa-plus"></i> Edit</button>
                                    </div>
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
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
            fetch('/dashboard/categories/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
@endsection