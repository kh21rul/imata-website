<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="{{ $meta->keywords ?? '' }}">
    <meta name="author" content="{{ $meta->author ?? '' }}">
    <meta name="description" content="{{ $meta->description ?? '' }}">
    <meta property="og:url" content="{{ $meta->url ?? '' }}" />
    <meta property="og:type" content="{{ $meta->type ?? '' }}">
    <meta property="og:title" content="{{ $title ?? '' }}" />
    <meta property="og:image" content="{{ $meta->image ?? '' }}" />
    <meta property="og:description" content="{{ $meta->description ?? '' }}" />
    
    <title>{{ $title }} - HIMATIF UNIMAL</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/justifiedGallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <!-- =======================================================
    * Developed By: IPTEK HIMATIF UNIMAL 2022
    * Frontend Develop By: Fajar Rivaldi Chan
    * Backend Develop By: Muhammad Bayu Juhri, M. Akbar Husain, Kairul Akram, Gilang Ramadhan Purba
    ======================================================== -->
</head>

<body>

<main>
    <div class="d-lg-flex masuk">
        <div class="bg order-1 order-md-2 d-none d-lg-block" style="background-image: url('img/bg_1.jpg');"></div>
        <div class="contents order-2 order-md-1">

        <div class="container">
            <div class="row align-items-center justify-content-center">
            <div class="col-md-7">

                @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif

                <img src="{{ asset('img/logo4.png') }}" width="200" alt="Logo">
                <p class="mb-4 pt-3">Login sistem manajemen website dan aplikasi HIMATIF</p>
                <form action="/login" method="post">
                    @csrf
                <div class="form-group first">
                    <label class="isi" for="username">Username</label>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" id="username" autofocus required value="{{ old('username') }}">
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group last mb-3">
                    <label class="isi" for="password">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Your Password" id="password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                
                {{-- <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" >
                    <label class="form-check-label" for="disabledFieldsetCheck">
                    Ingat Saya!
                    </label>
                </div> --}}

                <div class="d-grid gap-2 mt-4">
                    <button class="btn btn-success mt-4" type="submit">Masuk</button>
                </div>

                </form>
            </div>
            </div>
        </div>
        </div> 
    </div>
</main>

    <a href="#" class="back-to-top btn btn-success d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/list.min.js') }}"></script>
    <script> 
    var monkeyList = new List('test-list', { 
        valueNames: ['name']
    });
    </script>

    <!-- _Template Main JS File_ -->
    <script src="{{ asset('js/main.js') }}"></script>


    <!-- Js Library for galery -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery.justifiedGallery.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
</body>

</html>