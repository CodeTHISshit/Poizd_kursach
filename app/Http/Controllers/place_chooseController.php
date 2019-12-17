<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class place_chooseController extends Controller
{
    public function index()
    {
    session_start();

        $passenger=$_SESSION["passenger"];
    $places_2=DB::select("SELECT * from vagon_place where (place%2)=0");
        $places_1=DB::select("SELECT * from vagon_place where (place%2)=1");
        return view('place_choose',['places_2'=>$places_2],['places_1'=>$places_1])->with($passenger);
    }
}


