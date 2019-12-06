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

/*Route::get('/', function () {
    return view('welcome');
}); */


Auth::routes();

Route::get('/', 'HomeController@index');

Route::get("/posteos", "PostController@index");

Route::get("/posteo/{id}","PostController@show");

Route::get("/posteoPorTipo/{type_id}","PostController@indexPorTipoPosteo");

Route::get("/posteoPorUser/{user_id}","PostController@indexPorUser");

Route::get("/posteoPorUser/{user_id}","PostController@storePorUser");

Route::get("/posteoPorUser/{user_id}","PostController@updatePorUser");


Route::get("/abmposteos", "PostController@create")->middleware("auth");

Route::post("/abmposteos","PostController@store");


// Route::get("/posteos", function(){
//  return view("posteos");});

//Route::get("/posteo/{id}", function($id){

//  $vac= compact("id");
//  return view("detallePosteo",$vac);});*/
