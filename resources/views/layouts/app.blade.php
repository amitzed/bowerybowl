<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bowery Bowl</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Caveat|Gloria+Hallelujah|Indie+Flower|Lato|Permanent+Marker" rel="stylesheet">
  </head>
  <body>
    <br/>
    @include('inc.navbar')

    <div class="container">
      @if(Request::is('/'))
        @include('inc.showcase')
      @endif
      <div class="row">
        <div class="col-md-8 col-lg-8">
          @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
          <br/>
          @include('inc.sidebar')
        </div>
      </div>
    </div>

    <footer id="footer" class="text-center">
      <!-- <img class="pic3" src="{{ asset('images/slurp.gif') }}"> -->
      <p>Copyright 2019 &copy; <a href="https://github.com/amitzed" target="_blank">Bowery Bowl</a></p>
    </footer>
  </body>
</html>
