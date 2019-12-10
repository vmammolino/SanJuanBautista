@extends('template')
@section('title', 'Detalle de posteos')

@section('content')
    <h2>Detalle de Posteo</h2>
    <img  src="/storage/posteo/{{$posteo->image}}">
    <p>{{$posteo->title}}</p>
    <p>{{$posteo->description}}</p>
    <a href="//{{$posteo->link}}" target="_blank" >{{$posteo->link}}</a>

{{-- @dd($posteo->id); --}}
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
      <form class="" action="\posteos" method="get">

        <button type="submit" class="btn btn-link"> >
          VOLVER
        </button>
      </form>
    </div>
  </div>
  </div>

@endsection
