@extends('dashboard.layouts.main')

@section('container')
    {{-- Tangkap session & Muculkan modal sweetalert --}}
    <div class="flash-success" data-flashsuccess="{{ session('success') }}"></div>

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Produk</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item">Shop</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h4>Data Produk</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th>Gambar</th>
                                                <th>Nama</th>
                                                <th>Deskripsi</th>
                                                <th>Harga</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>
                                                        {{ ($products->currentPage() - 1) * $products->perPage() + $loop->iteration }}
                                                    </td>
                                                    <td>
                                                        <div class="gallery">
                                                            @if ($product->image)
                                                                <div class="gallery-item"
                                                                    data-image="{{ asset('storage/' . $product->image) }}"
                                                                    data-title="{{ $product->name }}"></div>
                                                            @else
                                                                <div class="gallery-item"
                                                                    data-image="{{ asset('dbuser/assets/img/products/product-1.jpg') }}"
                                                                    data-title="{{ $product->name }}"></div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{!! $product->description !!}</td>
                                                    <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                                    <td>
                                                        <div class="btn-group mb-3" role="group"
                                                            aria-label="Basic example">
                                                            <a href="/dashboard/products/{{ $product->id }}/edit"
                                                                type="button" class="btn btn-warning"><i
                                                                    class="fas fa-pen-alt"></i></a>
                                                            <form action="/dashboard/products/{{ $product->id }}"
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
                                    {{ $products->links() }}
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
                title: "Data Produk",
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
                    text: "Produk akan dihapus",
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
