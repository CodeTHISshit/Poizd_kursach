<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class place_chooseController extends Controller
{
    public function index(Request $request)
    {
        $vagon_id=$request->get("vagon_id");
        $id_train=$request->get("train_id");
    session_start();

        $passenger=$_SESSION["passenger"];
        $train_Number=DB::table('train')->where('id_train', $id_train)->value('train_number');
        $vagons=DB::table('train_composition')->where('train_id', $id_train);

        $_SESSION["train_number"]=$train_Number;


    $places_2=DB::select("SELECT
    vagon_place.id,
    vagon_place.vagon_id,
    vagon_place.type_place_id,
    vagon_place.place,
    vagon_place.place_info,
    train_composition.vagon
FROM
    
    vagon_place
    INNER Join train_composition on train_composition.vagon_id=vagon_place.vagon_id
WHERE
    (place % 2) = 0 and vagon_place.vagon_id=?",array($vagon_id));
        $places_1=DB::select("SELECT
    vagon_place.id,
    vagon_place.vagon_id,
    vagon_place.type_place_id,
    vagon_place.place,
    vagon_place.place_info,
    train_composition.vagon
FROM
    
    vagon_place
    INNER Join train_composition on train_composition.vagon_id=vagon_place.vagon_id
WHERE
    (place % 2) = 1 and vagon_place.vagon_id=?",array($vagon_id));

        return view('place_choose',['places_2'=>$places_2],['places_1'=>$places_1],['vagons'=>$vagons])->with($passenger);
    }
}


