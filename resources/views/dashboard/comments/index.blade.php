@extends('dashboard.layouts.main')

@section('container')
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
            <div class="card card-primary">
                <div class="card-header">
                <h4>Data Komentar</h4>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="komen" role="tabpanel" aria-labelledby="home-tab">
                        <div class="table-responsive">
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                <th class="text-center">NO</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Artikel</th>
                                <th>Isi Komentar</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $start = ($comments->currentPage() - 1) * $comments->perPage() + 1;
                                @endphp
                                @foreach ($comments as $comment)
                                <tr>
                                    <td>{{ $start++ }}</td>
                                    <td>{{ $comment->name }}</td>
                                    <td>{{ $comment->email }}</td>
                                    <td>{{ $comment->post->title }}</td>
                                    <td>{{ $comment->body }}</td>
                                    <td>
                                        <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                        <a href="/dashboard/comments/{{ $comment->id }}/edit" type="button" class="btn btn-warning" ><i class="fas fa-pen-alt"></i></a>
                                        <form action="/dashboard/comments/{{ $comment->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-del"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                            {{ $comments->appends(['start' => $start])->links() }}
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