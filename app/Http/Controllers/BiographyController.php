<?php

namespace App\Http\Controllers;

use App\Biography;
use Illuminate\Http\Request;
use Auth;

class BiographyController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  *@return \Illuminate\Http\Response
    //  */
    public function index()
    {
      $biography= Biography::all();
      $vac= compact("biography");
      return view("biografia",$vac);

    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function create()
    {
              return view ("altabiografia");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->birth_date!==null){
          $newDateFormat = date('Y/m/d', strtotime($request->birth_date));
        }

        $nombreArchivo = "";
        if ($request->file_cv!==null){
          $path = $request->file_cv->store("/public/cv");
          $nombreArchivo = basename($path);
        }

        $biography=new Biography;
        $biography->user_id=Auth::user()->id;
        $biography->first_name=$request->first_name;
        $biography->last_name=$request->last_name;
        $biography->genre=$request->genre;
        $biography->birth_date=$newDateFormat;
        $biography->phone=$request->phone;
        $biography->address=$request->address;
        $biography->city=$request->city;
        $biography->studies=$request->studies;
        $biography->degree=$request->degree;
        $biography->file_cv=$nombreArchivo;
        // dd("funcion STORE de BiographyController", $biography);

        $biography->save();
        return redirect ("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Biography  $biography
     * @return \Illuminate\Http\Response
     */

    public function show($user_id)
    {
        $biography = Biography::where("user_id","=",$user_id)->get();
        $vac= compact("biography");
        return view("biografia",$vac);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Biography  $biography
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit($id)
    {
      $biography= Biography::Find($id);
      $vac= compact("biography");
      return view("modifbiografia",$vac);

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
        $biography= Biography::find($request->id);
        // @dd($request->id, $request->user_id, $request->last_name, $biography->id, $biography->user_id,  $biography->last_name);

        if ($request->file_cv!==null){
          $path = $request->file_cv->store("/public/cv");
          $nombreArchivo = basename($path);
          $biography->file_cv=$request->$nombreArchivo;
        }

        $biography->first_name=$request->first_name;
        $biography->last_name=$request->last_name;
        $biography->genre=$request->genre;
        $biography->birth_date=$request->birth_date;
        $biography->phone=$request->phone;
        $biography->address=$request->address;
        $biography->city=$request->city;
        $biography->studies=$request->studies;
        $biography->degree=$request->degree;
        // dd("funcion STORE de BiographyController", $biography);

        $biography->save();
        return redirect ("/");

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
