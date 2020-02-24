<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send()
    {
        Mail::send(['text'=>'mail'], ['name', 'a4.click'], function ($message){
           $message->to('a.ofisnaya@gmail.com', 'To a4.click')->subject('Заявка с сайта a4.cick');
           $message->from('a.ofisnaya@gmail.com', 'a4.click');
        });
    }

}
