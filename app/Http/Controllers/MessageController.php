<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Events\MessageCreated;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::with(['user'])->get();
        return view('backend.pages.konsultasi.index', $messages);
        // return response()->json($messages);
    }

    public function store(Request $request)
    {
        $message = $request->user()->messages()->create([
            'body' => $request->body
        ]);

        broadcast(new MessageCreated($message))
                ->toOthers();

        return response()->json($message);
    }
}
