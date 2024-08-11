@extends('dashboard.layouts.main')

@section('container')
    {{-- Tangkap session & Muculkan modal sweetalert --}}
    <div class="flash-success" data-flashsuccess="{{ session('success') }}"></div>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="flash-error" data-flasherror="{{ $error }}"></div>
        @endforeach
    @endif

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Divisi Kepengurusan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Kepengurusan</div>
                    <div class="breadcrumb-item">Divisi</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h4>Data Divisi</h4>
                                <div class="card-header-action">
                                    <a href="#" class="btn btn-icon icon-left btn-warning" data-toggle="modal"
                                        data-target="#tambah"><i class="fas fa-plus-circle"></i> Tambah Divisi</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Nama Divisi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($divisions as $division)
                                                <tr>
                                                    <td>
                                                        {{ ($divisions->currentPage() - 1) * $divisions->perPage() + $loop->iteration }}
                                                    </td>
                                                    <td>{{ $division->title }}</td>
                                                    <td>
                                                        <div class="btn-group mb-3" role="group"
                                                            aria-label="Basic example">
                                                            <button type="button" data-toggle="modal"
                                                                data-target="#edit-{{ $division->id }}"
                                                                class="btn btn-warning">
                                                                <i class="fas fa-pen-alt"></i>
                                                            </button>
                                                            <form action="/dashboard/divisions/{{ $division->id }}"
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
                                    {{ $divisions->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal tambah -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/dashboard/divisions" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="title">Nama Divisi</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" id="title" autofocus="off" required value="{{ old('title') }}">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="sort">Urutan Divisi</label>
                                    <input type="number" class="form-control @error('sort') is-invalid @enderror"
                                        name="sort" id="sort" autofocus="off" required value="{{ old('sort') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-warning">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal edit -->
    @foreach ($divisions as $division)
        <div class="modal fade" id="edit-{{ $division->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Produk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/dashboard/divisions/{{ $division->id }}" method="post">
                        @method('put')
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="title">Nama Divisi</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            name="title" id="title" autofocus="off" required
                                            value="{{ old('title', $division->title) }}">
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="sort">Urutan Divisi</label>
                                        <input type="number" class="form-control @error('sort') is-invalid @enderror"
                                            name="sort" id="sort" autofocus="off" required
                                            value="{{ old('sort', $division->sort) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-warning">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('page-script')
    <script>
        const flashSuccess = $(".flash-success").data("flashsuccess");
        const flashError = $(".flash-error").data("flasherror");

        // Jika terjadi perubahan CRUD
        if (flashSuccess) {
            Swal.fire({
                title: "Data Divisi",
                text: "Berhasil " + flashSuccess,
                icon: "success",
            });
        }

        // jika terjadi error
        if (flashError) {
            Swal.fire({
                title: "Data Divisi Gagal di Ubah",
                text: flashError,
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
                    text: "Divisi akan dihapus",
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
