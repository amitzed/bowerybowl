@extends('layouts.app')
<style>
    body {
      margin: 0;
      padding: 0;
    }
    #box1 {
      border-radius: 1%;
      height: 25vh;
      width: 100%;
      background-image: url(images/food3.jpg);
      background-size: cover;
      display: table;
      background-attachment: fixed;
    }
    #box2{
      border-radius: 1%;
      height: 25vh;
      width: 100%;
      background-image: url(images/food2.jpg);
      background-size: cover;
      display: table;
      background-attachment: fixed;
    }
    #box3{
      border-radius: 1%;
      height: 25vh;
      width: 100%;
      background-image: url(images/food1.jpg);
      background-size: cover;
      display: table;
      background-attachment: fixed;
    }
    #box4{
      border-radius: 1%;
      height: 25vh;
      width: 100%;
      background-image: url(images/food4.jpg);
      background-size: cover;
      display: table;
      background-attachment: fixed;
    }
    #box5{
      border-radius: 1%;
      height: 25vh;
      width: 100%;
      background-image: url(images/food5.jpg);
      background-size: cover;
      display: table;
      background-attachment: fixed;
    }
    #box6{
      border-radius: 1%;
      height: 25vh;
      width: 100%;
      background-image: url(images/food6.jpg);
      background-size: cover;
      display: table;
      background-attachment: fixed;
    }
    #box7{
      border-radius: 1%;
      text-align: center;
      height: 10vh;
      width: 100%;
      background-image: url(images/slurp.gif);
      background-size: cover;
      display: table;
      background-attachment: fixed;
    }
</style>

  @section('content')
    <br/>
    <h1>Menu</h1>

    <div id="box1">
      <h6><strong>BLACK VINEGAR* - 15</strong><br/>
      Black vinegar and soy sauce dressing, cold medium straight noodles, lettuce, carrot, red cabbage, cilantro, seaweed, cucumber, okra, tomato, boiled salted pork, tuna chutney, boiled egg.</h6>
    </div>

    <div id="box7">
      <h6></h6>
    </div>

    <div id="box3">
      <h6><strong>GREEN SAUCE* - 16</strong><br/>
        Green vegetable puree and soy vinegar sauce, cold medium straight noodles, lettuce, carrot, red cabbage, cilantro, seaweed, cucumber, okra, tomato, boiled salted pork, tuna chutney, boiled egg
        <br/>
        *Vegetarian option available</h6>
    </div>

    <div id="box7">
      <h6></h6>
    </div>

    <div id="box1">
      <h6><strong>SPECIAL CAVIAR - 40</strong><br/>
        Sesame soy vinegar sauce, cold medium straight noodles with sturgeon caviar</h6>
    </div>

    <div id="box7">
      <h6></h6>
    </div>

    <div id="box4">
      <h5><strong>TOPPINGS</strong></h5>
      <h6>
        Extra vegetables (one type) - 1<br/>
        Boiled egg - 1<br/>
        Boiled salted pork - 2<br/>
        Tuna chutney - 2<br/>
        Boiled shrimp - 2<br/>
        Imitation crab - 2<br/>
        Avocado - 2
        </h6>
    </div>

    <div id="box7">
      <h6></h6>
    </div>

    <div id="box5">
      <h5><strong>BEVERAGES</strong></h5>
      <h6>
        ItoEn Oolong Tea - 4<br/>
        ItoEn Green Tea - 4<br/>
        Orion Beer (lager) - 6
        </h6>
    </div>


    <div id="box7">
      <h6>
        <a class="navbar-brand" href="#">Bowery <img class="logo" src="{{ asset('images/logo2.jpg') }}"> Bowl</a>
      </h6>
    </div>


@endsection
