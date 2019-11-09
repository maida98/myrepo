<html>
    <head>
        <title>Tourist Guide- @yield('name')</title>
    </head>
    <body>
        @section('header')

         <div class="container-fluid"style="background-color:#62A42F">
        <div class="row">
                <div class="col-sm-6">
                    <h1>TOURIST GUIDE</h1>
                 <div>
                <div class="col-sm-2">
                    <a href="{{ url('/home') }}"><h1>Home</h1></a>
                </div>
                <div class="col-sm-2">
                    <a href="{{ url('/contact') }}"><h1>Contact</h1></a>      
                </div>
                <div class="col-sm-2">
                    <a href="{{ url('/about') }}"><h1>About</h1></a>      
                </div>
        </div>  
</div>
@show

    </body>
</html>