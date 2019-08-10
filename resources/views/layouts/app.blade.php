<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'Satyam Pharaceutical') }} @isset($title): {{$title}}@endisset
    </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
   <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <!-- Fontfaces CSS-->
    <link href="{{asset('dashboard/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{asset('dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('dashboard/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('dashboard/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('dashboard/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('dashboard/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('dashboard/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('dashboard/css/theme.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('css/main.css')}}" rel="stylesheet" media="all">
</head>
<body>
    <div id="content">
        <main class="py-4">
            @yield('content')
        </main>
    </div>    
    <!-- Jquery JS-->
    <script src="{{asset('dashboard/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('dashboard/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('dashboard/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('dashboard/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('dashboard/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('dashboard/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('dashboard/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('dashboard/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('dashboard/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('dashboard/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('dashboard/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('dashboard/js/main.js')}}"></script>
    @stack('scripts')
    <script type="text/javascript" src="{{ asset('admin/js/functions.js') }}"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>
