@extends('dashboard.layouts.main')    
    
@section('container')
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
          <div class="card card-primary">
            <div class="card-header">
              <h4>Data Produk</h4>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th class="text-center">NO</th>
                      <th>Gambar</th>
                      <th>Nama</th>
                      <th>Deskripsi</th>
                      <th>Harga</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $start = ($products->currentPage() - 1) * $products->perPage() + 1;
                    @endphp
                    @foreach ($products as $product)
                    <tr>
                      <td>{{ $start++ }}</td>
                      <td>
                        <div class="gallery">
                          @if ($product->image)
                            <div class="gallery-item" data-image="{{ asset('storage/' . $product->image) }}" data-title="{{ $product->name }}"></div>
                          @else
                            <div class="gallery-item" data-image="{{ asset('dbuser/assets/img/products/product-1.jpg') }}" data-title="{{ $product->name }}"></div>
                          @endif    
                        </div>                            
                      </td>
                      <td>{{ $product->name }}</td>
                      <td>{!! $product->description !!}</td>
                      <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                      <td>
                        <div class="btn-group mb-3" role="group" aria-label="Basic example">
                          <a href="/dashboard/products/{{ $product->id }}/edit" type="button" class="btn btn-warning" ><i class="fas fa-pen-alt"></i></a>
                          <form action="/dashboard/products/{{ $product->id }}" method="post">
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
                {{ $products->appends(['start' => $start])->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
 <!-- Modal Edit -->
{{-- <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/dashboard/products/{{ $product->id }}" method="post">
        @method('put')
        @csrf
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" required autofocus required>
                @error('name')
                  <span class="invalid-feedback" role="alert">
                    {{ $message }}
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{ old('price') }}" required>
                @error('price')
                  <span class="invalid-feedback" role="alert">
                    {{ $message }}
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Gambar</label>
                <input type="file"  class="form-control" name="" value="">
                <small class="text-success">Gambar: contoh.jpg</small>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="description">Deskripsi</label>
                @error('description')
                  <span class="invalid" role="alert">
                    <small class="text-danger">{{ $message }}</small>
                  </span>
                @enderror
                <textarea class="summernote form-control @error('description') is-invalid @enderror" name="description" id="description" required>{{ old('description') }}</textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit"  class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div> --}}