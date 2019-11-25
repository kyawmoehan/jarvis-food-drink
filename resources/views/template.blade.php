<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <link rel="icon" href="{{asset('storage/images/home/logo.png')}}">
    @yield('pagetitle')
    <link rel="stylesheet" type="text/css" href="{{asset('food_drink/bootstrap/css/bootstrap.min.css')}}">
    {{-- bootstrap --}}
    <script type="text/javascript" src="{{asset('food_drink/bootstrap/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('food_drink/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="https://kit.fontawesome.com/58ec7c6d3d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('food_drink/style.css')}}">
    {{-- date time --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
    @yield('style')
</head>

<body>

    <!-- header nav bar -->
    @yield('navbar')
    <!-- write code here -->

   @yield('content')
    <!-- write code  end here -->

    <!-- footer -->
    @include('part.footer')
      <!-- script -->

    <script src="{{asset('food_drink/scripts/navbar.js')}}"></script>

    @yield('script')
</body>

</html>