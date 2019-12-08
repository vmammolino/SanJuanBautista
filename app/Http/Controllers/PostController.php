<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $post= Post::all();
      $vac= compact("post");
      return view("posteos",$vac);
        //
    }
    public function indexPorTipoPosteo($type_id)
    {
      $post= Post::where("type_id","=",$type_id)->get();
      $vac= compact("post");
      return view("posteos",$vac);
        //
    }
    public function indexPorUser($user_id)
    {
      $post= Post::where("user_id","=",$user_id)->get();
      $vac= compact("post");
      return view("posteos",$vac);
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ("abmposteo");
    }
    // /**
    //  * Get a validator for an incoming registration request.
    //  *
    //  * @param  array  $data
    //  * @return \Illuminate\Contracts\Validation\Validator
    //  */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'title' => ['required', 'string', 'max:191'],
    //        // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'description' => ['required', 'string'],
    //        'link' => ['required', 'string', 'max:300'],
    //         'image' => ['required', 'file', "image"],
    //     ]);
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {dd($request);
      //$path = $post->image->store("public/avatar");

    //  $nombreArchivo = basename($path);
     $path = $request->image->store("public/posteos");
     $nombreArchivo = basename($path);

      $post=new Post;
      $post->title=$request->title;
      $post->type_id=$request->category;
      $post->description=$request->description;
      $post->link=$request->link;
      $post->user_id=Auth::user()->id;
      $post->image=$nombreArchivo;

      $post->save();
      return redidect ("/abmposteos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $posteo= Post::Find($id);
      $vac= compact("posteo");
      return view("detallePosteo",$vac);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
