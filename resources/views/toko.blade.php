@extends('layouts.main')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Shop</h2>
          <ol>
            <li>Home</li>
            <li>Shop</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

 <!-- ======= toko Section ======= -->
 <section id="toko" class="toko">
  <div class="container">

    <div class="section-title">
      <h2>Shop</h2>
      <p>IMATA Shop</p>
    </div>

    <div id="test-list">
      <div class="row justify-content-end">
        <div class="col-lg-4 form-floating mb-4">
          <input type="text" class="form-control fuzzy-search ps-4" id="floatingInput" placeholder="Cari Produk ...">
          <label for="floatingInput" class="ms-4">Cari Produk ...</label>
        </div>
      </div>
      <div class="row content toko-container justify-content-center">

        <div class="list">
          @isset($products)
            @foreach ($products as $product)
              <div class="col-lg-3 col-md-6 toko-item filter-app mb-5">
                <div class="toko-wrap">
                    @if ($product->image)
                      <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}" width="290" height="372"> 
                    @else
                      <img src="{{ asset('img/product-contoh.jpg') }}" class="img-fluid" alt="{{ $product->name }}" width="290" height="372">  
                    @endif                 
                  <div class="toko-info">
                    <div>
                      <button class="btn btn-warning" type="button" data-id="{{ $product->id }}" data-bs-toggle="modal" data-bs-target="#beli"><i class="bi bi-cart"></i></button>
                    </div>
                  </div>
                </div>
                <h4><a href="#" data-bs-toggle="modal" data-bs-target="#beli" class="name">{{ $product->name }}</a></h4>
                <p>Rp {{ number_format($product->price, 0, ',', '.') }}</p>
              </div>
            @endforeach
          @endisset
        </div>    
        {{ $products->links() }}
      </div>
    </div>
  </div>
</section><!-- End toko Section -->

<!---------------Modal----------------------->
<div class="detail-produk modal fade" id="beli" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg modal-dialog-centered">
      <div class="modal-content bg-transparent">
        <div class="modal-header bg-transparent">
          <button type="button" class="btn-close text-white bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="modal-body p-2">
              <div class="row">
                <div class="col-lg-5">
                  <img src="{{ asset('img/product-contoh.jpg') }}" class="img-fluid" alt="...">
                </div>
                <div class="col-lg-7 py-5 px-3">
                  <h4>Tas cantik Himatif</h4>
                  <h5>Rp 200.000</h5>
                  <p>Deskripsi : <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam cupiditate natus distinctio perferendis consectetur mollitia quas inventore repellat culpa aliquam exercitationem reprehenderit amet alias, voluptate ullam sint nam placeat. Inventore!
                  </p>
                  <div class="d-grid gap-2 mt-5">
                    <a href="" target="_blank" class="btn btn-outline-success me-lg-3"><i class="bi bi-whatsapp"></i> Pesan via Whatsapp</a>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>
</div>

<script>
  const products = @json($products).data;
  document.querySelectorAll('.btn-warning').forEach(function(button) {
    button.addEventListener('click', function() {
      const productId = this.getAttribute('data-id');
      const product = products.find(function(product) {
        return product.id === parseInt(productId);
      });

      document.querySelector('.modal-body h4').innerHTML = product.name;
      document.querySelector('.modal-body h5').innerHTML = 'Rp. ' + product.price;
      if (product.image) {
        document.querySelector('.modal-body img').src = "storage/" + product.image;
      } else {
        document.querySelector('.modal-body img').src = "img/product-contoh.jpg";
      }
      document.querySelector('.modal-body p').innerHTML ='Deskripsi : <br>' + product.description;
      document.querySelector('.modal-body .d-grid a').href = "https://api.whatsapp.com/send?phone=6282229139665&text=Assalamu'alaikum%20Kak%20Saya%20ingin%20bertanya%20seputar%20produk%20" + product.name + "%20dari%20IMATA%20Shop";
    });
  });
</script>
<!--------------- end Modal----------------------->
@endsection