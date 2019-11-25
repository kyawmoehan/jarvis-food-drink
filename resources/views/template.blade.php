<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('storage/images/home/logo.png')}}">
    @yield('pagetitle')
    <link rel="stylesheet" type="text/css" href="{{asset('food_drink/bootstrap/css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{asset('food_drink/bootstrap/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('food_drink/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="https://kit.fontawesome.com/58ec7c6d3d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('food_drink/style.css')}}">
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
    <script src="{{asset('food_drink/scripts/navbar.js')}}">
    </script>
    @yield('script')
</body>

</html>