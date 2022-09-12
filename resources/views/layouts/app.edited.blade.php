<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <!-- Script Font Awesome icons (free version)-->
        
       <!--Style-->
       @include('layouts.style')
    </head>
    <body id="page-top">
        <!-- Navigation/Navbar-->
        @include('layouts.navbar')
        <!-- Content -->
        @yield('content')
        
        <!-- Footer-->
        @include('layouts.footer')
        
        
        <!-- Script Bootstrap core JS-->
        @include('layouts.script')
    </body>
</html>
