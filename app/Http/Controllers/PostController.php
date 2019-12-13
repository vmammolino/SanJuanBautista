<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{
    /**MUESTRA TODOS LOS POSTEOS DEL SITIO
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
    // MUESTRA LOS POSTEOS POR CATEGORIA
    public function indexPorTipoPosteo($type_id)
    {
      $post= Post::where("type_id","=",$type_id)->get();
      $vac= compact("post");
      return view("posteoPorTipo",$vac);
        //
    }
    // MUESTRA LOS POSTEOS POR USUARIO
    public function indexPorUser($user_id)
    {
      $post= Post::where("user_id","=",$user_id)->get();
      $vac= compact("post");
      return view("posteos",$vac);
        //
    }
    /**DEVUELVE LA VISTA AL ALTA DE UN POSTEO
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ("abmposteo");
    }

    // public function modifPosteo($id)
    // {
    // // aca habria que mandarle todos los datos del posteo
    // $post= Post::where("id","=",$id)->get();
    // $vac= compact("post");
    // return view("modifPosteos",$vac);

    // }
    // /**
    //  * Get a validator for an incoming registration request.
    //  *
    //  * @param  array  $data
    //  * @return \Illuminate\Contracts\Validation\Validator
    //  */
     //  protected function validator(array $data)
     //  { dd($data);
     //     return Validator::make($data, [
     //        'type_id'=>['required', 'smallint']
     //      //  'title' => ['required', 'string', 'max:191'],
     //        // 'link' => ['required', 'string', 'emai', 'max:255', 'unique:users'],
     //        'description' => ['required', 'text'],
     //        'link' => ['required', 'string', 'max:300'],
     //        'image' => ['required', 'file', "image"],
     //     ]);
     // }
    /** ALTA DE POSTEO
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {//dd($request);

     $path = $request->image->store("public/posteo");
     $nombreArchivo = basename($path);

      $post=new Post;
      $post->title=$request->title;
      $post->type_id=$request->type_id;
      $post->description=$request->description;
      $post->link=$request->link;
      $post->user_id=Auth::user()->id;
      $post->image=$nombreArchivo;

      $post->save();
      return redirect ("/abmposteos");
    }

    /**MUESTRA UN POSTEO EN DETALLLE
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

    /**MUESTRA EL FORMULARIO CON EL POSTEO A MODIFICAR
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $posteo= Post::Find($id);
      $vac= compact("posteo");
      return view("modifPosteos",$vac);
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



// $post=new Post
      // $postId =$request->id;

      $post=Post::Find($request->id);
// @dd($post);
      $post->title=$request->title;
      $post->type_id=$request->type_id;
      $post->description=$request->description;
      $post->link=$request->link;

      if ($request->image!==null)
        {
          // {{$request->image}};
          // <img  src="/storage/posteo/{{$posteo->image}}>
// dd($image);

            //$image="/storage/app/public/posteo/$post->image";
          //  dd($image);
          //  $nombreImagen=basename($image);
          //  @dd(basename($image));
          // unlink(basename("/storage/posteo/$post->image"));
        //  $image="public/posteo/$post->image";
           //unlink($image);
   // @dd($image);
          $path = $request->image->store("public/posteo");
          $nombreArchivo = basename($path);
          $post->image=$nombreArchivo;
        }
      //$post->user_id=Auth::user()->id;
      //$post->image=$nombreArchivo;
  // @dd($post);
  $post->save();
// @dd($request->user_id);
  return redirect("/posteoPorUser/{$request->user_id}");
      // @dd(Auth::user()->id);

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
  {

      $user=$request->user_id;
      $id=$request->id;
      $posteo=Post::Find($id);
      $posteo->delete();
      return redirect ("/posteoPorUser/{$request->user_id}");

    }
}
