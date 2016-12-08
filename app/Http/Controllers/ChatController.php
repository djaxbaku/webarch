<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ChatController extends Controller
{
 public function sendMessage(){
 	$username= Auth::user()->name;
 	$text= $('textarea').val();
 	$chatMessage= new ChatMessage;
 	$chatMessage->sender_username = $username;
 	$chatMessage->message= $text ;
 	$chatMessage->save();


 	return 'yes'
 }   
}
