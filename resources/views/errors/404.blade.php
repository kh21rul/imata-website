@php
    $title = '404';
@endphp

@extends('layouts.main')
  @section('container')
    <section class="notfound">
      <div class="container my-lg-5 py-lg-5 ">
        <div class="row justify-content-center px-5">
          <div class="col-md-5  align-self-center">
            <img src="{{ url('img/404.png') }}"  class="img-fluid" alt="sad">
          </div>
          <div class="col-md-6  align-self-center text-center text-md-start">
            <h1>404</h1>
            <h2>UPPSSS !!.</h2>
            <p class="text-muted">Ga ada apa apa disini ngab, halaman tidak tersedia. Silahkan hubungi kami apabila ini merupakan kesalahan
            </p>
            <a href="/" class="text-success"><p><i class="bi bi-arrow-left"></i> Back To Home</p></a>
          </div>
        </div>
      </div>
    </section>
  @endsection
