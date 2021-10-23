<!DOCTYPE html>
<html >
    
     <title>@yield('title')</title>

      <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet"  href="{{ URL::to('src/css/main.css') }}"

    <body>
        @include('includes.header')

        <div>
        @yield('content')

        </div>
    </body>
</html>