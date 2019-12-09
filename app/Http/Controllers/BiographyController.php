<?php

namespace App\Http\Controllers;

use App\Biography;
use Illuminate\Http\Request;

class BiographyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
      $registro = Biography::where("user_id","=",$user_id)->get();
      // dd("user : ", $user_id, $registro);

      $vac= compact("registro");
      // dd("VAC: ", $vac, $registro);

      return view("biografia",$vac);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id)
    {

              return view ("biografia");
/*
              $path = $data['file_cv']->store("public/cv");

              $nombreArchivo = basename($path);

              return User::create([
                  'user_id' => $data['user_id'],
                  'first_name' => $data['first_name'],
                  'last_name' => $data['last_name'],
                  'genre' => $data['genre'],
                  'birth_date' => $data['birth_date'],
                  'phone' => $data['phone'],
                  'address' => $data['address'],
                  'city' => $data['city'],
                  'studies' => $data['studies'],
                  'degree' => $data['degree'],
                  'file_cv' => $nombreArchivo,
              ]);
*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd("Estoy en funcion STORE de BiographyController", $request);
        $path = $request->file_cv->store("public/cv");
        $nombreArchivo = basename($path);

        $post=new Post;
        $post->user_id=$request->user_id;
        $post->first_name=$request->first_name;
        $post->last_name=$request->last_name;
        $post->genre=$request->genre;
        $post->birth_date=$request->birth_date;
        $post->phone=$request->phone;
        $post->address=$request->address;
        $post->city=$request->city;
        $post->studies=$request->studies;
        $post->degree=$request->degree;
        $post->file_cv=$request->$nombreArchivo;

        $post->save();
        return redirect ("/biografia");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Biography  $biography
     * @return \Illuminate\Http\Response
     */

    public function show($user_id)
    {
        $biografia = Biography::where("user_id","=",$user_id)->get();
        $vac= compact("$biografia");
        return view("biografia",$vac);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Biography  $biography
     * @return \Illuminate\Http\Response
     */
    public function edit(Biography $biography)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Biography  $biography
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biography $biography)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Biography  $biography
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biography $biography)
    {
        //
    }
}
