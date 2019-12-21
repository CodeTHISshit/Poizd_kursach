<?php

use Illuminate\Support\Facades\DB;


function Insert_vagon($place_id){
    DB::update("Update vagon_place Set place_info=1 Where vagon_place.id=?",array($place_id));
}

















?>
