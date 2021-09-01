<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(){
        return view('chats');
    }
    public function fetchMessages(){
        return Message::with('user')->get();
    }

    public function sendMessage(Request $request){
        $user = $request->user();
        $message = $user->messages()->create([
            'message' => $request->message
        ]);

        broadcast(new MessageSent($message->load('user')))->toOthers();

        return['status' => 'success'];
    }
}
