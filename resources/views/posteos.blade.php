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
                <div class="card-header">{{ __('Mis Posteos') }}</div>
                  <div class="card-body">
                    <h2 align="center">Bienvenido {{Auth::user()->name}}</h2><br><br>
                    @if ($post->isEmpty())
                      <div class="form-group row">
                        <div class="col-md-6">
                          <h5 align="center">No cargaste ningún posteo todavía</h5><br>
                          <div class="d-flex justify-content-center btn-action">
                              <a href="\abmposteos"class="btn btn-primary">Nuevo Posteo</a>
                            <a href="\"class="btn btn-link">Volver</a>
                          </div>
                        </div>
                      </div>

                    @else
                      <div class="row justify-content-center">
                        <section class ="posteos">
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
                                  </form>
                                @endif
                                @switch($posteo->type_id)
                                  @case(1)
                                    <p>Trabajo</p>
                                  @break
                                  @case(2)
                                    <p>Capacitación</p>
                                  @break
                                  @case(3)
                                    <p>Emprendimiento</p>
                                  @break
                                  @case(4)
                                    <p>Exámenes para Graduarse</p>
                                  @break
                                @endswitch
                              </article>
                            </div>

                          @empty
                            <h5 align="center">No cargaste ningún posteo todavía</h5><br>
                          @endforelse

                        </section>
                      </div>
                      <div class="d-flex justify-content-center btn-action">
                          <a href="\abmposteos"class="btn btn-primary">Nuevo Posteo</a>
                        <a href="\"class="btn btn-link">Volver</a>
                      </div>
                    @endif
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endguest

@endsection
