@extends('dashboard.layouts.main')

@section('container')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Kategori</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="/dashboard/posts">Blog</a></div>
                    <div class="breadcrumb-item"><a href="/dashboard/categories">Kategori</a></div>
                    <div class="breadcrumb-item">Edit-Kategori</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h4>Edit Kategori</h4>
                            </div>
                            <div class="card-body">
                                <form action="/dashboard/categories/{{ $category->slug }}" method="post">
                                    @method('put')
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Jenis Kategori" id="name" name="name" required
                                                autofocus value="{{ old('name', $category->name) }}">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                                placeholder="Slug" id="slug" name="slug" required
                                                value="{{ old('slug', $category->slug) }}">
                                            @error('slug')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            <div class="input-group-append">
                                                <button class="btn btn-warning" type="submit"><i class="fas fa-plus"></i>
                                                    Edit</button>
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
