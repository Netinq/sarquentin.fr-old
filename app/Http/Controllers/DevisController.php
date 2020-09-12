<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class DevisController extends Controller
{
    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'phone' =>  'required',
      'prestation' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'email'   =>   $request->email,
            'phone'   =>   $request->phone,
            'prestation'   =>   $request->prestation
        );

     Mail::to('pro@sarquentin.fr')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
