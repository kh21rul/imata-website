@extends('dashboard.layouts.main')

@section('container')
    {{-- Tangkap session & Muculkan modal sweetalert --}}
    <div class="flash-data" data-flashdata="{{ session('success') }}"></div>

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Post</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item">Blog</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h4>Data Post</h4>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">NO</th>
                                                <th>Gambar</th>
                                                <th>Kategori</th>
                                                <th>Judul</th>
                                                <th>Tags</th>
                                                <th>Komen</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $start = ($posts->currentPage() - 1) * $posts->perPage() + 1;
                                            @endphp
                                            @foreach ($posts as $post)
                                                <tr>
                                                    <td>{{ $start++ }}</td>
                                                    <td>
                                                        <div class="gallery">
                                                            @if ($post->image)
                                                                <div class="gallery-item"
                                                                    data-image="{{ url('storage/' . $post->image) }}"
                                                                    data-title="Image 1"></div>
                                                            @else
                                                                <div class="gallery-item"
                                                                    data-image="{{ url('dbuser/assets/img/news/img03.jpg') }}"
                                                                    data-title="Image 1"></div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>{{ $post->category->name ?? '' }}</td>
                                                    <td>{{ $post->title }}</td>
                                                    <td>{{ $post->tags->count() }}</td>
                                                    <td>{{ $post->comments->count() }}</td>
                                                    <td>
                                                        <div class="btn-group mb-3" role="group"
                                                            aria-label="Basic example">
                                                            <a href="/dashboard/posts/{{ $post->slug }}/edit"
                                                                type="button" class="btn btn-warning"><i
                                                                    class="fas fa-pen-alt"></i></a>
                                                            <form action="/dashboard/posts/{{ $post->slug }}"
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
                                            </tr>
                                        </tbody>
                                    </table>
                                    {{ $posts->appends(['start' => $start])->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('page-script')
    <script>
        const flashData = $(".flash-data").data("flashdata");

        // Jika terjadi perubahan CRUD
        if (flashData) {
            Swal.fire({
                title: "Data Postingan",
                text: "Berhasil " + flashData,
                icon: "success",
            });
        }

        // konfirmasi hapus data
        $(document).ready(function() {
            $(".delete-form").on("submit", function(e) {
                e.preventDefault();

                var form = this;

                Swal.fire({
                    title: "Apakah kamu yakin?",
                    text: "Postingan akan dihapus",
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
