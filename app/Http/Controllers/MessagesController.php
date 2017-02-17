<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Message;
use App\Http\Requests;
use DB;
use App\Http\email;
class MessagesController extends Controller
{
    public function send(Request $request){
    	$message= new Message;
    	$message->getter_name = $request->getter_name;
    	$message->sender_name= Auth::user()->email;
    	$message->heading= $request->heading;
    	$message->text= $request->text;
      $message->save();
      // $mail= DB::table('messages')->get();
      // return view('email', compact('mail'));
      return redirect('/email');
    }
    public function email(){
      $mail= Message::where('getter_name', Auth::user()->email)->paginate(2);
      return view('email', compact('mail'));
    }
  public function compose()
  {

  	return view('compose');
  }
}
