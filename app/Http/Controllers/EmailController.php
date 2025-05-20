<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMessage($data));

        return response()->json([
            'message' => 'Email sent successfully',
        ]);
    }
}
