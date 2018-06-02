<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>阿德(Order)訂餐 | @yield('title')</title>

  <!-- Bootstrap core CSS-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

  <!-- Custom fonts for this template-->
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    @if (session('message'))
        <script> alert('{{ session('message') }}') </script>
    @endif
 
    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">您確定要登出?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">取消</button>
                    {{ link_to_route('logout','登出',null,['class' => 'btn btn-primary']) }}
                </div>
            </div>
        </div>
    </div>

    {{--mix--}}
        <script src="{{ asset('js/bundle/manifest.js') }}"></script>
        <script src="{{ asset('js/bundle/vendor.js') }}"></script>
        <script src="{{ asset('js/bundle/template.bundle.js') }}"></script>

        @yield('bundle')
</body>
@include('layouts.show_error')
</html>
