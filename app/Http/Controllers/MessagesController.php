<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        //  Create new message and save it.
        $message = new Message();

        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        $message->save();

        //  Redirect
        return redirect('/')->with('success', 'Message sent');
    }

    public function getMessages()
    {
        $messages = Message::all();

        return view('messages')->with('messages', $messages);
    }
}
