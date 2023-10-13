<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Events\NewMessageNotification;
 
class MessageController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
 
    public function index()
    {
     
        return view('broadcast');
    }
 
    public function send()
    {
        // ... 
         
        // message is being sent 
        $message = new Message;
        $message->setAttribute('from', 1);
        $message->setAttribute('to', 2);
        $message->setAttribute('message', 'Demo message from user 1 to user 2');
        $message->save();
         
        // want to broadcast NewMessageNotification event 
        event(new NewMessageNotification($message));
         
        // ... 
    }
}