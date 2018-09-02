@extends('layouts.app')

@section('content')
  <h1>Messages</h1>
  @if(count($messages) > 0)
    @foreach($messages as $message)
      <ul class="list-group">
        <li class="list-group-item">Name: {{$message->name}}</li>
        <li class="list-group-item">Email: {{$message->email}}</li>
        <li class="list-group-item">Message: {{$message->message}}</li>
      </ul>
    @endforeach
  @endif
@endsection

@section('sidebar')
  @parent
 <div class="address">
   315 Bowery<br/>NYC 10003<br/>(212) 555.1212
 </div>
@endsection
