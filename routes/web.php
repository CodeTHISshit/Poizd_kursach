<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/','main_controller@index');
Route::post('/train_choose','train_chooseController@index');
Route::post('/train_choose/place_choose','place_chooseController@index');
Route::get('/train_choose/place_choose/Ticket_form','TicketController@index');
Route::post('/train_choose/place_choose/Ticket_form/Succses_send','MailSender@send');
