<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTicket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('station', function (Blueprint $table) {
            $table->bigIncrements('id_station');
            $table->char('name');
        });
        Schema::create('passengers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('fio');
            $table->integer('passport');

        });
        Schema::create('vagon_type', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('vagon_type');
            $table->integer('place_count');

        });
        Schema::create('train', function (Blueprint $table) {
            $table->bigIncrements('id_train');
            $table->integer('train_number');
            $table->char('type');
            $table->dateTime('time_arrive_sender');
            $table->bigInteger('id_station_departure')->unsigned();
            $table->foreign('id_station_departure')->references('id_station')->on('station');
            $table->dateTime('departure_time');
            $table->bigInteger('id_station_arrive')->unsigned();
            $table->foreign('id_station_arrive')->references('id_station')->on('station');
            $table->dateTime('time_arrive');
            $table->char('periodically');


        });

        Schema::create('place_type', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char("place_type");
        });

        Schema::create('train_marshrut', function (Blueprint $table) {
            $table->bigIncrements('train_id')->unsigned();
            $table->bigInteger('station_id')->unsigned();
            $table->time('arrive_time');
            $table->time('depart_time');
            $table->integer('distance');
            $table->foreign('station_id')->references('id_station')->on('station');
            $table->foreign('train_id')->references('id_train')->on('train');

        });

        Schema::create('vagon_place', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->bigInteger('vagon_id')->unsigned();
        $table->bigInteger('type_place_id')->unsigned();
        $table->integer('place');
        $table->boolean("place_info");
        $table->foreign('vagon_id')->references('id')->on('vagon_type');
        $table->foreign('type_place_id')->references('id')->on('place_type');
    });

        Schema::create('train_composition', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('train_id')->unsigned();
            $table->bigInteger('vagon_id')->unsigned();
            $table->integer('vagon');
            $table->foreign('train_id')->references('id_train')->on('train');
            $table->foreign('vagon_id')->references('vagon_id')->on('vagon_place');
        });




        Schema::create('trip', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('train_id')->unsigned();
            $table->date('date');
            $table->char('status');
            $table->foreign('train_id')->references('id_train')->on('train');
        });



        Schema::create('ticket', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('passenger_id')->unsigned();
            $table->bigInteger('train_id')->unsigned();
            $table->bigInteger('vagon_id')->unsigned();
            $table->bigInteger('place_id')->unsigned();
            $table->char('privilege');
            $table->integer('price');

            $table->foreign('train_id')->references('train_id')->on('trip');
            $table->foreign('vagon_id')->references('vagon_id')->on('vagon_place');
            $table->foreign('place_id')->references('id')->on('vagon_place');
            $table->foreign('passenger_id')->references('id')->on('passengers');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('station');
        Schema::dropIfExists('ticket');
        Schema::dropIfExists('trip');
        Schema::dropIfExists('passengers');
        Schema::dropIfExists('place_type');
        Schema::dropIfExists('vagon_type');
        Schema::dropIfExists('vagon_place');
        Schema::dropIfExists('train_composition');
        Schema::dropIfExists('train_marshrut');
        Schema::dropIfExists('train');
    }
}
