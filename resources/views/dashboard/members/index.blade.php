@extends('dashboard.layouts.main')

@section('container')
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
                                    <table class="table table-striped text-center">
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
                                                            <button type="button" data-toggle="modal" data-target="#edit"
                                                                class="btn btn-warning"><i
                                                                    class="fas fa-pen-alt"></i></button>
                                                            <a href="a.html" type="button"
                                                                class="btn btn-danger btn-del"><i
                                                                    class="fas fa-trash-alt"></i></a>
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
@endsection
