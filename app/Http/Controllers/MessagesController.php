<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required'
      ]);
      // Create a Message Here:
      $message = new Message;
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->message = $request->input('message');
      // SAVE the message:
      $message->save();
      // ReDirect
      return redirect('/')->with('success', 'Got Your Message! We Are Looking Forward to Serving You the Best Ramen in NYC!');
    }
    public function getMessages(){
      $messages = Message::all();

      return view('messages')->with('messages', $messages);
    }
}
