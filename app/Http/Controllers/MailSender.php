<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSender extends Controller
{
    public function send(Request $request){
    $User_name=$request->get('FIO');
    Mail::send(new OrderShipped($User_name));

    }
}
