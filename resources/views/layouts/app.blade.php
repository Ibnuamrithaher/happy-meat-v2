<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    @include('includes.style')
    @stack('addon-style')
  </head>
  <body class="body">
    @include('includes.navbar2')

    @yield('content')

    @include('includes.footer')
  </body>
</html>
