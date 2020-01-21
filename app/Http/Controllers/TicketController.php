<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function index(){
        session_start();
        $place_id=$_GET['place'];
        $_SESSION['place']=$place_id;
        $place_id = htmlspecialchars($place_id);
        $train_number=$_SESSION["train_number"];
        $wagon_id=$_SESSION["wagon_id"];
        $wagon_id = htmlspecialchars($wagon_id);
        $wagon=DB::select("SELECT train_composition.vagon,place_type.place_type,vagon_place.place FROM train_composition,vagon_place
inner join place_type on vagon_place.type_place_id=place_type.id
WHERE train_composition.vagon_id=? and vagon_place.id=?;",array($wagon_id,$place_id));
        $price=0;
        foreach($wagon as $wag){
            if($wag->place_type=="Купе")$price=540;
            if($wag->place_type=="Плацкард")$price=340;
            if($wag->place_type=="Люкс")$price=950;
        }
        $_SESSION['price']=$price;
        return view("Ticket_form",['wagons'=>$wagon])->with(['place'=>$place_id,'train_num'=>$train_number,'price'=>$price]);
    }
}
