@extends('layouts.app')

@section('content')
<br/>
  <h1>Ramen Aficionados Rejoice</h1>
  <p>After opening multiple restaurants throughout Japan and the United States, chef Matsuhisa made the decision to funnel all if his creative culinary energy to his favorite place in the world: the Lower East Side. Chef Matsuhisa debuted his first restaurant in Kyoto in 1995, and after a highly successful expansion, chose extremely high quality over quantity. This Japanese import serves up highest-quality tonkotsu ramen and many find themselves coming multiple time per week to sample Matsuhisa's newest creations and staple favorites.</p>

  <img class="pic1" src="{{ asset('images/kitchen.jpg') }}">

  <p>Bowery Bowl is a destination in itself with exclusive menu offerings, all-day dining, and an intimate 12-seat sushi bar in the center of it all.  Located in the space that once housed the legendary music venue CBGB's and featuring an interactive Sushi Bar Omakase tasting menu, a wonderful dining experience can always be expected.  Reservations are always suggested.</p>

  <img class="pic2" src="{{ asset('images/food5.jpg') }}">

@endsection

@section('sidebar')
 @parent
 <div class="address">
  <p>315 Bowery<br/>NYC 10003<br/>(212) 555.1212</p>
</div>
@endsection
