<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class place_chooseController extends Controller
{
    public function index(Request $request)
    {
        $vagon_id = $request->get("vagon_id");
        $id_train = $request->get("train_id");
        session_start();
        $_SESSION["wagon_id"]=$vagon_id;
        $passenger = $_SESSION["passenger"];
        $_SESSION["train_id"]=$id_train;
        if (isset($id_train)) {
            $train_Number = DB::table('train')->where('id_train', $id_train)->value('train_number');

            $_SESSION["train_number"] = $train_Number;
        }
        $vagons = DB::table('train_composition')->where('train_id', $id_train);

        $places = DB::select("SELECT
    vagon_place.id,
    vagon_place.vagon_id,
    vagon_place.type_place_id,
    vagon_place.place,
    vagon_place.place_info,
    train_composition.vagon,
    vagon_type.vagon_type
FROM
    vagon_place
    INNER Join train_composition on train_composition.vagon_id=vagon_place.vagon_id
     INNER Join vagon_type on vagon_type.id=vagon_place.type_place_id
WHERE
     vagon_place.vagon_id=?", array($vagon_id));
        if (isset($places)) {
            return view('place_choose', ['places' => $places], ['vagons' => $vagons])->with($passenger);
        }
    }
}


