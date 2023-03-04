<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $title ?? '' }} - HIMATIF Dashboard</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    
    <!-- CSS Libraries -->
    <script src="{{ asset('dbuser/node_modules/chart.js/dist/Chart.min.css') }}"></script>
    <link rel="stylesheet" href="{{ asset('dbuser/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dbuser/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dbuser/node_modules/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('dbuser/node_modules/chocolat/dist/css/chocolat.css') }}">
    <link rel="stylesheet" href="{{ asset('dbuser/node_modules/select2/dist/css/select2.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('dbuser/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dbuser/assets/css/components.css') }}">
  </head>

  <body>
    <div id="app">
      <div class="main-wrapper">

        @include('dashboard.layouts.header')

        @include('dashboard.layouts.sidebar')

        <!-- Main Content -->
          @yield('container')
        
        @include('dashboard.layouts.footer')

      </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('dbuser/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('dbuser/node_modules/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('dbuser/node_modules/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dbuser/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dbuser/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dbuser/node_modules/summernote/dist/summernote-bs4.js') }}"></script>
    <script src="{{ asset('dbuser/node_modules/sweetalert/dist/sweetalert.min.js') }}"></script>
    <script src="{{ asset('dbuser/node_modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    <script src="{{ asset('dbuser/node_modules/select2/dist/js/select2.full.min.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('dbuser/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('dbuser/assets/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('dbuser/assets/js/page/modules-datatables.js') }}"></script>
    <script src="{{ asset('dbuser/assets/js/page/modules-sweetalert.js') }}"></script>
    <script src="{{ asset('dbuser/assets/js/page/bootstrap-modal.js') }}"></script>
    <script>
      var ctx = document.getElementById("myChart2").getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "juli", "Agustus", "September", "Oktober", "November", "Desember"],
          datasets: [{
            label: 'Statistics',
            data: [460, 458, 330, 502, 430, 610, 488, 460, 458, 330, 502, 430],
            borderWidth: 2,
            backgroundColor: '#47c363',
            borderColor: '#47c363',
            borderWidth: 2.5,
            pointBackgroundColor: '#ffffff',
            pointRadius: 4
          }]
        },
        options: {
          legend: {
            display: false
          },
          scales: {
            yAxes: [{
              gridLines: {
                drawBorder: false,
                color: '#f2f2f2',
              },
              ticks: {
                beginAtZero: true,
                stepSize: 150
              }
            }],
            xAxes: [{
              ticks: {
                display: false
              },
              gridLines: {
                display: false
              }
            }]
          },
        }
      });
    </script>
  </body>
</html>