@extends('dashboard.layouts.main')

@section('container')
    {{-- Tangkap session & Muculkan modal sweetalert --}}
    <div class="flash-success" data-flashsuccess="{{ session('success') }}"></div>

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Komentar</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="/dashboard/posts">Blog</a></div>
                    <div class="breadcrumb-item">Komentar</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h4>Data Komentar</h4>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="komen" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div class="table-responsive">
                                            <table class="table table-striped text-center" id="table-1">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Nama</th>
                                                        <th>Email</th>
                                                        <th>Artikel</th>
                                                        <th>Isi Komentar</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($comments as $comment)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $comment->name }}</td>
                                                            <td>{{ $comment->email }}</td>
                                                            <td>{{ $comment->post->title }}</td>
                                                            <td>{{ $comment->body }}</td>
                                                            <td>
                                                                <div class="btn-group mb-3" role="group"
                                                                    aria-label="Basic example">
                                                                    <a href="/dashboard/comments/{{ $comment->id }}/edit"
                                                                        type="button" class="btn btn-warning"><i
                                                                            class="fas fa-pen-alt"></i></a>
                                                                    <form action="/dashboard/comments/{{ $comment->id }}"
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
                </div>
            </div>
        </section>
    </div>
@endsection

@section('page-script')
    <script>
        const flashSuccess = $(".flash-success").data("flashsuccess");

        // Jika terjadi perubahan CRUD
        if (flashSuccess) {
            Swal.fire({
                title: "Data Komentar",
                text: "Berhasil " + flashSuccess,
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
                    text: "Komentar akan dihapus",
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
