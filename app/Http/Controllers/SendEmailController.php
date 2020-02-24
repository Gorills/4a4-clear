<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
        return view('mail');

    }

    function send(Request $request)
    {

        $this->validate($request, [

            'name' => 'required',
            'tel'  => 'required',
            'text' => 'required'

        ]);

        $data = array(
            'name'   => $request->name,
            'tel'   => $request->tel,
            'text'   => $request->text
        );

        Mail::to('a4.click@mail.ru')->send(new SendMail($data));
        return view('thanks');
    }
}
