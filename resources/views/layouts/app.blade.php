<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bowery Bowl</title>
  </head>
  <body>
    @yield('content')
    @section('sidebar')
    <div class="sidebar">
      <h4>Hours of Operation:</h4>
      Monday - Thursday: 11AM - 10PM
      <br/>
      Friday - Saturday: 11AM - 1AM
      <br/>
      Sunday: Closed
      @show
    </div>
  </body>
</html>
