@extends('dashboard.layouts.main')    
    
@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tambah Produk</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="/dashboard/products">Shop</a></div>
        <div class="breadcrumb-item">Tambah-Produk</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Form tambah Produk</h4>
            </div>
            <div class="card-body">
              <form action="/dashboard/products" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mb-4">
                  <label for="name" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" required autofocus value="{{ old('name') }}">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label for="price" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" required value="{{ old('price') }}">
                    @error('price')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label for="image" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar Produk</label>
                  <div class="col-sm-12 col-md-7">
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input type="file" accept="image/*" name="image" id="image" class="form-control @error('image') is-invalid @enderror" onchange="previewImage()">
                    @error('image')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label for="description" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                  <div class="col-sm-12 col-md-7">
                    @error('description')
                      <span class="invalid" role="alert">
                        <small class="text-danger">{{ $message }}</small>
                      </span>
                    @enderror
                    <textarea class="summernote @error('description') is-invalid @enderror" name="description" id="description" required>{{ old('description') }}</textarea>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    <button type="submit" class="btn btn-primary">Simpan</button>
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
  // Fungsi untuk memformat inputan harga
  function formatPrice() {
    var price = document.getElementById('price');
    var value = price.value;
    value = value.replace(/\D/g, '');
    value = value.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
    price.value = value;
  }

  // Panggil fungsi formatPrice saat input harga berubah
  document.getElementById('price').addEventListener('input', formatPrice);

  // Fungsi untuk menghapus titik saat submit
  document.querySelector('button[type="submit"]').addEventListener('click', function() {
  var priceInput = document.getElementById('price');
  var priceValue = priceInput.value;
  priceValue = priceValue.replace(/\./g, ''); // hapus semua titik
  priceInput.value = priceValue;
  });

  // Fungsi untuk menampilkan preview gambar
  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block'; 

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    };
  }
</script>
@endsection
