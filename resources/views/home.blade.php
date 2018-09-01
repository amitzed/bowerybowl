@extends('layouts.app')
<style>
    body {
      margin: 0;
      padding: 0;
    }
    #box1, .address{
      border-radius: 1%;
      height: 100vh;
      width: 100%;
      background-image: url(images/int2.jpg);
      background-size: cover;
      display: table;
      background-attachment: fixed;
    }
    #box2{
      border-radius: 1%;
      height: 100vh;
      width: 100%;
      background-image: url(images/int1.jpg);
      background-size: cover;
      display: table;
      background-attachment: fixed;
    }
    #box3{
      border-radius: 1%;
      text-align: center;
      height: 100vh;
      width: 100%;
      background-image: url(images/int3.jpg);
      background-size: cover;
      display: table;
      background-attachment: fixed;
    }
</style>

  @section('content')
  <br/>
    <h1>Ramen Aficionados Rejoice</h1>
    <div id="box1">
      <h6>After opening multiple restaurants throughout Japan and the United States, chef Matsuhisa made the decision to funnel all if his creative culinary energy to his favorite place in the world: the Lower East Side. Chef Matsuhisa debuted his first restaurant in Kyoto in 1995, and after a highly successful expansion, chose extremely high quality over quantity. This Japanese import serves up highest-quality tonkotsu ramen and many find themselves coming multiple time per week to sample Matsuhisa's newest creations and staple favorites.<br/><img class="logo" src="{{ asset('images/logo2.jpg') }}"></h6>
    </div>

    <div id="box2">
      <h6>Bowery Bowl is a destination in itself with exclusive menu offerings, all-day dining, and an intimate 12-seat sushi bar in the center of it all.  Located in the space that once housed the legendary music venue CBGB's and featuring an interactive Sushi Bar Omakase tasting menu, a wonderful dining experience can always be expected.<br/><img class="logo" src="{{ asset('images/logo2.jpg') }}"></h6>
    </div>

    <div id="box3">
      <h6>
        <a class="navbar-brand" href="#">Bowery <img class="logo" src="{{ asset('images/logo2.jpg') }}"> Bowl</a>
      </h6>
    </div>


@endsection

@section('sidebar')
 @parent
 <div class="address">
  315 Bowery<br/>NYC 10003<br/>(212) 555.1212
</div>
@endsection
