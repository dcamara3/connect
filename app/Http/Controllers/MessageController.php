<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function create(Request $request) {

    	$message = new Message();

    	// $message->title = $_POST['title']; // might fail b/c array key doesn't exist
    	$message->title = $request->title; // or $request->input('title')
    	$message->content = $request->content;

    	$message->save();

    	return redirect('/');
    }

    public function view($id) {
    	$message = Message::findOrFail($id);
    	return view ('message', [
    		'message' => $message
    	]);
    }
}