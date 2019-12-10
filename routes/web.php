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
/*Posteos por usuario*/
Route::get("/posteoPorUser/{user_id}","PostController@indexPorUser");

/*Formulario de alta de posteo get y post*/
Route::get("/abmposteos", "PostController@create")->middleware("auth");

Route::post("/abmposteos","PostController@store");


/* Biografia del usuario */
Route::get("/biografia/{user_id}", "BiographyController@index");

Route::post("/biografia/{user_id}", "BiographyController@store");

Route::post("/altabiografia/{user_id}", "BiographyController@create");



// Route::get("/posteos", function(){
//  return view("posteos");});

//Route::get("/posteo/{id}", function($id){

//  $vac= compact("id");
//  return view("detallePosteo",$vac);});*/
