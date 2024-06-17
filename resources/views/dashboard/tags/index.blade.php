@extends('dashboard.layouts.main')

@section('container')
    {{-- Tangkap session & Muculkan modal sweetalert --}}
    <div class="flash-success" data-flashsuccess="{{ session('success') }}"></div>
    <div class="flash-failed" data-flashfailed="{{ session('failed') }}"></div>

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tags</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="/dashboard/posts">Blog</a></div>
                    <div class="breadcrumb-item">Tags</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h4>Tambah Tags</h4>
                            </div>
                            <div class="card-body">
                                <form action="/dashboard/tags" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Jenis Tag" id="name" name="name" required autofocus
                                                value="{{ old('name') }}">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            {{-- input slug hidden --}}
                                            <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                                placeholder="Slug" id="slug" name="slug" required
                                                value="{{ old('slug') }}">
                                            @error('slug')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            {{-- end input slug hidden --}}
                                            <div class="input-group-append">
                                                <button class="btn btn-warning" type="submit"><i class="fas fa-plus"></i>
                                                    Tambah</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card card-warning">
                            <div class="card-header">
                                <h4>Tags</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped text-center" id="table-1">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Jenis</th>
                                                <th>Jumlah Post</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tags as $tag)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $tag->name }}</td>
                                                    <td>{{ $tag->posts->count() }}</td>
                                                    <td>
                                                        <div class="btn-group mb-3" role="group"
                                                            aria-label="Basic example">
                                                            <a href="/dashboard/tags/{{ $tag->slug }}/edit"
                                                                type="button" class="btn btn-warning"><i
                                                                    class="fas fa-pen-alt"></i></a>
                                                            <form action="/dashboard/tags/{{ $tag->slug }}"
                                                                method="post" class="delete-form">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger"><i
                                                                        class="fas fa-trash-alt"></i></button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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

@section('page-script')
    <script>
        const flashSuccess = $(".flash-success").data("flashsuccess");
        const flashFailed = $(".flash-failed").data("flashfailed");

        // Jika terjadi perubahan CRUD
        if (flashSuccess) {
            Swal.fire({
                title: "Data Tag",
                text: "Berhasil " + flashSuccess,
                icon: "success",
            });
        }

        if (flashFailed) {
            Swal.fire({
                title: "Tag gagal di hapus",
                text: flashFailed,
                icon: "error",
            });
        }

        // konfirmasi hapus data
        $(document).ready(function() {
            $(".delete-form").on("submit", function(e) {
                e.preventDefault();

                var form = this;

                Swal.fire({
                    title: "Apakah kamu yakin?",
                    text: "Tag akan dihapus",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Hapus!",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endsection
