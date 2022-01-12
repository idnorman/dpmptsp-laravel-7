<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ config('app.name') }} &mdash; @yield('title', 'Portal')  </title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="shortcut icon" href="{{ asset('images/web/favicon.ico')}}" /> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('panels/css/modules/datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('panels/css/modules/datatables/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('panels/css/modules/datatables/select.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('panels/css/modules/select2.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('panels/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('panels/css/components.css') }}">
  <style type="text/css">
   .deskripsi-artikel{
  min-height: 150px;

  }
  .deskripsi-kategori{
  min-height: 150px;
  }
  </style>
</head>

<body>
  <div id="app">
    @yield('app')
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('panels/js/stisla.js') }}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('panels/js/modules/datatables/datatables.min.js') }}"></script>
  <!-- <script src="{{ asset('panels/js/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script> -->
  <!-- <script src="{{ asset('panels/js/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script> -->
  <!-- <script src="{{ asset('panels/js/modules/jquery-ui/jquery-ui.min.js') }}"></script> -->
  <script src="{{ asset('panels/js/modules/select2.full.min.js') }}"></script>


  <!-- Page Specific JS File -->
  <script src="{{ asset('panels/js/modules/datatables/modules-datatables.js') }}"></script> 
  <!-- Template JS File -->
  <script src="{{ asset('panels/js/scripts.js') }}"></script>
  <script src="{{ asset('panels/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
</body>
</html>
