<?php

namespace App\Http\Controllers;

use App\Mail\NajhanContact;
use App\Mail\PublicContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function public_email(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $notes = $request->notes;

        Mail::to('50posen50@gmail.com')->send(new PublicContact($name, $email, $notes));
        Mail::to($email)->send(new NajhanContact($name));
        return back();
    }
}
