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
/*Muestra todos los posteos del sitio*/
Route::get("/posteos", "PostController@index");
/*Muestra un posteo en detalle*/
Route::get("/posteo/{id}","PostController@show");
/*Muestra todos los posteos por categoria*/
Route::get("/posteoPorTipo/{type_id}","PostController@indexPorTipoPosteo");
/*Posteos por usuario*/
Route::get("/posteoPorUser/{user_id}","PostController@indexPorUser");

/*Formulario de alta de posteo get y post*/
Route::get("/abmposteos", "PostController@create")->middleware("auth");

Route::post("/abmposteos","PostController@store");
/*Formulario de MODIFICACION de posteo get y post*/
Route::post("/modifPosteos/{id}", "PostController@edit")->middleware("auth");

Route::post("/modifPosteos","PostController@update");

/*Formulario borrar posteo */
Route::post("/borrarPosteo","PostController@destroy");






/* Biografia del usuario */
Route::get("/biografia/{user_id}", "BiographyController@show");

Route::get("/altabiografia", "BiographyController@create")->middleware("auth");
Route::post("/altabiografia", "BiographyController@store");

Route::get("/modifbiografia/{id}", "BiographyController@edit")->middleware("auth");
Route::post("modifbiografia", "BiographyController@update");


// Route::get("/posteos", function(){
//  return view("posteos");});

//Route::get("/posteo/{id}", function($id){

//  $vac= compact("id");
//  return view("detallePosteo",$vac);});*/
