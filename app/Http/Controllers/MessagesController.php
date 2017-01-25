<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Message;
use App\Http\Requests;

class MessagesController extends Controller
{
    public function send(Request $request){
    	$message= new Message;
    	$message->getter_name = $request->getter_name;
    	$message->sender_name= Auth::user()->name;
    	$message->heading= $request->heading;
    	$message->text= $request->text;	
    }
}
