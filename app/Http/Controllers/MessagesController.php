<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Message;
use App\Http\Requests;
use DB;
class MessagesController extends Controller
{
    public function send(Request $request){
    	$message= new Message;
    	$message->getter_name = $request->getter_name;
    	$message->sender_name= Auth::user()->email;
    	$message->heading= $request->heading;
    	$message->text= $request->text;
      $message->save();
      $mail= DB::table('messages')->get();

      return view('email', compact('mail'));
    }
    public function email(){
      $mail= Message::all();
      return view('email', compact('mail'));
    }
  public function compose()
  {
  	return view('compose');
  }
}
