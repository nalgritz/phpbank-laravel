<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PHP Bank</title>
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    @yield('header')
  </head>
  <body>
    <div class="container">
      <h1 class="title">PHP Bank</h1>
      <h3 class="links">
        <a href="/">Home</a>
      </h3>
      @yield('content')
    </div>

      @yield('footer')

  </body>
</html>
