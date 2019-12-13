@extends('layouts.app')
{{-- @section('title', 'Posteos') --}}


@section('content')

  @guest

  @else

    <div class="container">
        <div class="row justify-content-center">
          <section class ="posteos">
            {{-- @dd($post[1]["type_id"]); --}}
            @switch($post[1]["type_id"])
            @case(1)
              <h2>Total de posteos de "Trabajo"</h2>
            @break
            @case(2)
            <h2>Total de posteos de "Capacitación"</h2>
            @break
            @case(3)
            <h2>Total de posteos de "Emprendimientos"</h2>
            @break
            @case(4)
            <h2>Total de posteos de "Graduación"</h2>
            @break
            @endswitch
            {{-- <h2>Total de posteos por categoria</h2> --}}
            @forelse ($post as $posteo)
              <article class="posteo">
                <a href="/posteo/{{$posteo->id}}" >
                  <img  src="/storage/posteo/{{$posteo->image}}" height="150" width="150">
                </a>
                <a href="/posteo/{{$posteo->id}}" >
                  <p>{{$posteo->title}}</p>
                </a>
                  {{-- <span class="fas fa-thumbs-up"></span> --}}
                  <span style="font-size: 48px; color: Dodgerblue;">
                  <i class="fas fa-thumbs-up"></i>
                  </span>
                {{-- <i class="fas fa-thumbs-up"></i> --}}
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
