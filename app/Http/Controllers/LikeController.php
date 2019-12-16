<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Http\Request;
use Auth;

use App\Post;


class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    // MUESTRA LOS LIKES POR USUARIO
    public function indexPorUser($user_id)
    {


      $like= Like::where("user_id","=",$user_id)->get();
      // $post=New Post;
      // $post::all();
       // $post= Post::where("user_id","=",$type_id)->get();

        // @dd($post);


      // $vac= compact("post");
      // return view("posteoPorTipo",$vac);

      $vac= compact("like");
      return view("/likesPorUser",$vac);
        //

      $like= Like::where("user_id","=",$user_id)->get();
      $post= Post::all();
      $vac= compact("like", "post");
      return view("/likesPorUser",$vac);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
    }

    /**ALTA DE UN LIKE
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $like=new Like;
      $like->user_id=$request->user_id;
      $like->post_id=$request->post_id;
      $like->save();
      return redirect ("/posteo/{$request->post_id}");
    }
    /**ALTA DE UN LIKE desde el detalle de un Post
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeDetalle(Request $request)
    {
      $like=new Like;
      $like->user_id=$request->user_id;
      $like->post_id=$request->post_id;
      $like->save();
      return redirect ("/posteo/{$request->post_id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function show(Like $like)
    {
      $like= Like::Find($post_id);
      $post=new Post;

      @dd($posteo);
      $vac= compact("like");
      return view("detalleLike",$vac);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Like $like)
    {
        //
    }
}
