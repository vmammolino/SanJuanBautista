@extends('layouts.app')

@section('content')


  @guest


  @else


<div class="container">
    <div class="row justify-content-center">
      <section class ="posteos">
        <h2>Detalle de Posteo</h2>
        <article class="posteo">
          <img  src="/storage/posteo/{{$posteo->image}}"height="150" width="150">
          <p>{{$posteo->title}}</p>
          <p>{{$posteo->description}}</p>
          <a href="//{{$posteo->link}}" target="_blank" >{{$posteo->link}}</a>
        </article>

    {{-- <div class="row justify-content-center"> --}}
        {{-- <div class="col-md-8"> --}}
        <h2>Queres modificar el posteo?</h2>
        <div class="">
          <form class="" action="\modifPosteos\{{$posteo->id}}" method="post">
            @csrf
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
