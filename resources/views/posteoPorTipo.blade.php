@extends('layouts.app')
{{-- @section('title', 'Posteos') --}}


@section('content')

@guest

@else

{{-- <body style="background-image: none"> --}}

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Posteos') }}</div>
            <div class="card-body">
              @if ($post->isEmpty())
                <h2>No tenemos posteos disponibles</h2>
              @else
                {{-- <div class="row justify-content-center" style="background-color: white"> --}}
                  <section class ="posteos">

                    @switch($post[1]["type_id"])
                      @case(1)
                        <h2 align="center">Ofertas de Trabajo</h2>
                      @break
                      @case(2)
                        <h2 align="center">Capacitaciones</h2>
                      @break
                      @case(3)
                        <h2 align="center">Emprendimientos</h2>
                      @break
                      @case(4)
                        <h2 align="center">Exámenes para Graduarse</h2>
                      @break
                    @endswitch

                    @forelse ($post as $posteo)
                      <article class="one-post" class="list-group-item list-group-item-action">
                        <a href="/posteo/{{$posteo->id}}" class="post-image" >
                          <img  src="/storage/posteo/{{$posteo->image}}" height="150" width="150">
                        </a>
                        <a href="/posteo/{{$posteo->id}}" class="post-title" >
                          <h5>{{$posteo->title}}</h5>
                        </a>
                        @if (Auth::user()->id!=$posteo->user_id)
                          <form class="post-like" action="\altaLike" method="post">
                          @csrf
                          <input type="hidden" name="post_id" value="{{$posteo->id}}">
                          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                          <input type="hidden" name="type_id" value="{{$posteo->type_id}}">
                          <button type="submit" class="btn btn-link" >
                            <img  src="/imagenes_sitio/_ionicons_svg_md-thumbs-up.svg" height="40" width="40" >
                          </button>
                        </form>
                        @endif
                      </article>


                      @empty
                      <h2>No tenemos posteos disponibles</h2>

                    @endforelse

                    </section>
                  </div>
              {{-- </div> --}}
            @endif

            <div class="d-flex justify-content-center btn-action">
              <a href="\abmposteos"class="btn btn-primary">Nuevo Posteo</a>
              <a href="\"class="btn btn-link">Volver</a>
            </div>

          </div>
        </div>
      </div>
    </div>

@endguest

@endsection
