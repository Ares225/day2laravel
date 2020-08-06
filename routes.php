<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('csetuts','CsetutsController@HelloCSETUTS');
Route::get('pricefilter/{max}/{min?}', function($max, $min=0){
  echo "max = ".$max." min =".$min; }
  );
Route::get('test/{name}','Hellocontroller@index')->middleware('test');

Route::get('demo/{price}', function($price){
  echo $price;
  })->where(['price'=>"[0-9]+"]);

 Route::get('test','Testcontroller@ShowView') ;

Route::get('/', function () {
    return view('welcome');
});
Route::get('hello','hellocontroller@index');
