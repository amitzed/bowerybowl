<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bowery Bowl</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Caveat|Gloria+Hallelujah|Indie+Flower|Lato|Permanent+Marker" rel="stylesheet">
  </head>
  <body>
    @include('inc.navbar')
    @yield('content')
    @include('inc.sidebar')
  </body>
</html>
