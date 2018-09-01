@extends('layouts.app')

@section('content')
<br/>
  <h1>Reservations</h1>
  {!! Form::open(['url' => 'reservations/submit']) !!}
    <div class="form-group">
      {{Form::label('name', 'Your Name')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Please Enter Your Name'])}}
    </div>

  <div class="form-group">
    {{Form::label('email', 'Your Email Address')}}
    {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'illustration@gmail.com'])}}
  </div>

  <div class="form-group">
    {{Form::label('message', 'Reservation Details')}}
    {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Please provide number of guests and preferred reservation date/time and we will promptly reply via email concerning availability.'])}}
  </div>

  <div>
      {{Form::submit('Send', ['class'=> 'btn btn-primary'])}}
  </div>

  {!! Form::close() !!}
@endsection
