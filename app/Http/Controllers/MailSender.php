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
        session_start();
        $FIO=$request->get('FIO');
        $Passport=$request->get('Passport');
        DB::insert('INSERT INTO `passengers`(`fio`, `passport`) VALUES (?,?)',array($FIO,$Passport));
        $Numtrain=$request->get('Numtrain');
        $Wagon=$request->get('Wagon');
        $Place_type=$request->get('Place_type');
        $place_num=$request->get('Place_num');
        $price=$request->get('price');
        $previlegue=$request->get('previlegue');
        $wagon_id=$_SESSION["wagon_id"];
        $place_id=$_SESSION['place'];
        $id_train =$_SESSION["train_id"];
        $pasenger_id=DB::table('passengers')->where('passport',$Passport)->value('id');
        DB::insert('INSERT INTO `tickets`(`passenger_id`, `train_id`, `vagon_id`, `place_id`, `privilege`, `price`) 
        VALUES (?,?,?,?,?,?)',array($pasenger_id,$id_train,$wagon_id,$place_id,$previlegue,540));
        return view('Succses_send');
    }

}
