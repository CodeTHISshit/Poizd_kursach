<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class train_chooseController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function index(Request $request)
        {
            $img_diesel = Storage::get('DIESEL2.jpg');
            $passenger=$request->get("passenger");
            session_start();
            $_SESSION["passenger"]=$passenger;
        $depart = $request->get("depart");
        $arrive=$request->get("arrive");
        $vagons=DB::table('train_composition');
        DB::table('passengers')->insertGetId(array('fio'=>$passenger,'passport'=>0));
        $users=DB::select('SELECT 
    train.id_train,
    train.train_number,
    train.type,
    train.time_arrive_sender,
    train.id_station_departure,
    train.departure_time,
    train.id_station_arrive,
    train.time_arrive,
    train.periodically,
    s1.name as arrive,
    s2.name as depart
    
FROM
    station,train
   
INNER JOIN station AS s1
ON
    train.id_station_arrive = s1.id_station
    INNER JOIN station AS s2
ON
    train.id_station_departure = s2.id_station
WHERE station.id_station=id_station_arrive
 
');


        return view("train_choose",['users'=>$users])->with(['depart'=>$depart,'arrive'=>$arrive,'img_url'=>$img_diesel]);
    }
}
