@extends('layouts.app')
{{-- @section('title', 'Posteos') --}}


@section('content')

  @guest

  @else

    <div class="container">
        <div class="row justify-content-center">
          <section class ="posteos">
            {{-- <h2>Bien venido "{{Auth::user()->name}}".Estos son tus posteos</h2> --}}
            @forelse ($post as $posteo)
              <article class="posteo">
                <a href="/posteo/{{$posteo->id}}" >
                  <img  src="/storage/posteo/{{$posteo->image}}" width="150px" heigth="150px">
                </a>
                <a href="/posteo/{{$posteo->id}}" >
                  <p>{{$posteo->title}}</p>
                </a>
              </article>

            @empty
              <p>'No tenemos posteos disponibles'</p>

            @endforelse

          </section>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
    <h2>QUERES AGREGAR UN NUEVO POSTEO</h2>
    <div class="">
    <a href="\abmposteos"class="btn btn-success">CARGAR NUEVO</a>
    </div>
    <div class="">
      <a href="\"class="btn btn-link">VOLVER</a>
    </div>
  </div>
  </div>
  @endguest
@endsection
