<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailSender extends Controller
{

    public function send(Request $request)
    {

        $FIO=$request->get('FIO');
        $Passport=$request->get('Passport');
        $previlegue=$request->get('previlegue');
        session_start();
        $Num_train=$_SESSION["train_number"];
        $place_num=$request=$_SESSION["place"];
        $price=$_SESSION['price'];
        $Wagon=$_SESSION["vagon_num"];


        DB::insert('INSERT INTO `passengers`(`fio`, `passport`) VALUES (?,?)',array($FIO,$Passport));




        DB::insert('INSERT INTO `tickets`(`passenger`, `train_num`, `vagon_num`, `place`, `privilege`, `price`)
            VALUES (?,?,?,?,?,?)',array($FIO,$Num_train,$Wagon,$place_num,$previlegue,$price));
        return view('Succses_send');
    }

}
