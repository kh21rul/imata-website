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
                <h1>Data Pengurus</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Kepengurusan</div>
                    <div class="breadcrumb-item">Pengurus</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h4>Data Pengurus</h4>
                                <div class="card-header-action">
                                    {{-- Filter dropdown divisi --}}
                                    <div class="dropdown">
                                        <button class="btn btn-warning dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            @if (request('division'))
                                                {{ $divisions->where('slug', request('division'))->value('title') }}
                                            @else
                                                Semua Divisi
                                            @endif
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="{{ route('members.index') }}">Semua Divisi</a>
                                            @foreach ($divisions as $division)
                                                <a class="dropdown-item"
                                                    href="/dashboard/members?division={{ $division->slug }}">
                                                    {{ $division->title }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-icon icon-left btn-warning" data-toggle="modal"
                                        data-target="#tambah"><i class="fas fa-plus-circle"></i> Tambah Pengurus</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Foto</th>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Divisi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($members as $member)
                                                <tr>
                                                    <td>
                                                        {{ ($members->currentPage() - 1) * $members->perPage() + $loop->iteration }}
                                                    </td>
                                                    <td>
                                                        <div class="gallery">
                                                            @if ($member->photo)
                                                                <div class="gallery-item"
                                                                    data-image="{{ asset('storage/' . $member->photo) }}"
                                                                    data-title="{{ $member->name }}">
                                                                </div>
                                                            @else
                                                                <div class="gallery-item"
                                                                    data-image="{{ asset('dbuser/assets/img/news/img03.jpg') }}"
                                                                    data-title="Image 1">
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>{{ $member->name }}</td>
                                                    <td>{{ $member->position }}</td>
                                                    <td>{{ $member->division->title }}</td>
                                                    <td>
                                                        <div class="btn-group mb-3" role="group"
                                                            aria-label="Basic example">
                                                            <button type="button" data-toggle="modal"
                                                                data-target="#edit-{{ $member->id }}"
                                                                class="btn btn-warning">
                                                                <i class="fas fa-pen-alt"></i>
                                                            </button>
                                                            <form action="/dashboard/members/{{ $member->id }}"
                                                                method="POST" class="delete-form">
                                                                @csrf
                                                                @method('delete')
                                                                {{-- input hidden apabila ada request division --}}
                                                                @if (request('division'))
                                                                    <input type="hidden" name="division"
                                                                        value="{{ request('division') }}">
                                                                @endif
                                                                <button type="submit" class="btn btn-danger">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $members->links() }}
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Pengurus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/dashboard/members" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" id="name" autofocus="off" required value="{{ old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="position">Jabatan</label>
                                    <input type="text" class="form-control @error('postition') is-invalid @enderror"
                                        name="position" id="position" autofocus="off" required
                                        value="{{ old('position') }}">
                                    @error('position')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="division_id">Divisi</label>
                                    <select class="form-control" name="division_id" required>
                                        <option selected>Pilih Divisi</option>
                                        @foreach ($divisions as $division)
                                            @if (old('division_id') == $division->id)
                                                <option value="{{ $division->id }}" selected>{{ $division->title }}
                                                </option>
                                            @else
                                                <option value="{{ $division->id }}">{{ $division->title }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('division_id')
                                        <span class="invalid" role="alert">
                                            <small class="text-danger">Silahkan pilih kategori terlebih dahulu</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="sort">Urutan Tampil</label>
                                    <input type="number" class="form-control @error('sort') is-invalid @enderror"
                                        name="sort" id="sort" autofocus="off" required
                                        value="{{ old('sort') }}">
                                    @error('sort')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="photo">Gambar</label>
                                    <input type="file" accept="image/*"
                                        class="form-control @error('photo') is-invalid @enderror" name="photo"
                                        id="photo">
                                    @error('photo')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- input hidden apabila ada request division --}}
                    @if (request('division'))
                        <input type="hidden" name="division" value="{{ request('division') }}">
                    @endif
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-warning">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    @foreach ($members as $member)
        <div class="modal fade" id="edit-{{ $member->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Pengurus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/dashboard/members/{{ $member->id }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" id="name" autofocus="off" required
                                            value="{{ old('name', $member->name) }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="position">Jabatan</label>
                                        <input type="text"
                                            class="form-control @error('postition') is-invalid @enderror" name="position"
                                            id="position" autofocus="off" required
                                            value="{{ old('position', $member->position) }}">
                                        @error('position')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="division_id">Divisi</label>
                                        <select class="form-control" name="division_id" required>
                                            <option selected>Pilih Divisi</option>
                                            @foreach ($divisions as $division)
                                                @if (old('division_id', $member->division_id) == $division->id)
                                                    <option value="{{ $division->id }}" selected>{{ $division->title }}
                                                    </option>
                                                @else
                                                    <option value="{{ $division->id }}">{{ $division->title }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('division_id')
                                            <span class="invalid" role="alert">
                                                <small class="text-danger">Silahkan pilih kategori terlebih dahulu</small>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="sort">Urutan Tampil</label>
                                        <input type="number" class="form-control @error('sort') is-invalid @enderror"
                                            name="sort" id="sort" autofocus="off" required
                                            value="{{ old('sort', $member->sort) }}">
                                        @error('sort')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="photo">Pilih Foto Baru</label>
                                        <input type="hidden" name="oldImage" value="{{ $member->photo }}">
                                        <input type="file" accept="image/*"
                                            class="form-control @error('photo') is-invalid @enderror" name="photo"
                                            id="photo">
                                        @error('photo')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- input hidden apabila ada request division --}}
                        @if (request('division'))
                            <input type="hidden" name="division" value="{{ request('division') }}">
                        @endif
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

        // Jika terjadi perubahan CRUD
        if (flashSuccess) {
            Swal.fire({
                title: "Data Pengurus",
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
                    text: "Data pengurus akan dihapus",
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
