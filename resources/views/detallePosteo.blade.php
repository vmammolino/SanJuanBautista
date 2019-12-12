@extends('layouts.app')

@section('content')


  @guest


  @else


    <h2>Detalle de Posteo</h2>
    <img  src="/storage/posteo/{{$posteo->image}}">
    <p>{{$posteo->title}}</p>
    <p>{{$posteo->description}}</p>
    <a href="//{{$posteo->link}}" target="_blank" >{{$posteo->link}}</a>


    <div class="row justify-content-center">
        <div class="col-md-8">
    <h2>QUERES MODIFICAR EL POSTEO</h2>
    <div class="">
      <form class="" action="\modifPosteos\{{$posteo->id}}" method="get">
        <button type="submit" class="btn btn-success" >
        MODIFICAR
        </button>
      </form>
      <form class="" action="/borrarPosteo"   method="post">
        @csrf
        <input type="hidden" name="id" value="{{$posteo->id}}">
        <input type="hidden" name="user_id" value="{{$posteo->user_id}}">
        <button type="submit" class="btn btn-warning">
         {{ __('BORRAR POSTEO') }}
       </form>
    </div>
    <div class="">
      <a href="\"class="btn btn-link">VOLVER</a>
    </div>

  </div>
  </div>
@endguest
@endsection
