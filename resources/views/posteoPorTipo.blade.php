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
                <h3>No tenemos posteos disponibles</h3>
              @else
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
                      <div class="list-post">
                        <article class="list-one-post" class="list-group-item list-group-item-action">
                          <a href="/posteo/{{$posteo->id}}">
                            <img  src="/storage/posteo/{{$posteo->image}}" height="30" width="30">
                          </a>
                          <a href="/posteo/{{$posteo->id}}">
                            <h5>{{$posteo->title}}</h5>
                          </a>
                          @if (Auth::user()->id!=$posteo->user_id)
                            <form class="list-post-like" action="\altaLikeDetalle" method="post">
                              @csrf
                              <input type="hidden" name="post_id" value="{{$posteo->id}}">
                              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                              <input type="hidden" name="type_id" value="{{$posteo->type_id}}">
                              <button type="submit" class="btn btn-outline-light btn-sm  btn-list-post-like" >
                                <img  src="/imagenes_sitio/_ionicons_svg_md-thumbs-up.svg" height="10" width="15">
                              </button>
                              {{-- <p>Me interesa!!</p> --}}
                            </form>
                          @endif
                        </article>

                      </div>

                      @empty
                      <h2>No tenemos posteos disponibles</h2>

                    @endforelse

                    </section>
                  </div>

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
