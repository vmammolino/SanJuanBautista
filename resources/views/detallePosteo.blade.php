@extends('layouts.app')

@section('content')

@guest

@else

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Posteo') }}</div>
            <div class="card-body">

              <section class ="posteos">
                <div class="row justify-content-center">
                  <article class="">
                    @switch($posteo->type_id)
                      @case(1)
                        <h2 align="center">Post de Trabajo</h2>
                      @break
                      @case(2)
                        <h2 align="center">Post de Capacitación</h2>
                      @break
                      @case(3)
                        <h2 align="center">Post de Emprendimiento</h2>
                      @break
                      @case(4)
                        <h2 align="center">Post de Exámenes para Graduarse</h2>
                      @break
                    @endswitch

                    <div class="one-post" >
                      <img  src="/storage/posteo/{{$posteo->image}}" height="150" width="150">
                      <h5>{{$posteo->title}}</h5>
                      <p class="post-desc">{{$posteo->description}}</p>
                      <a href="//{{$posteo->link}}" target="_blank" class="post-link" >{{$posteo->link}}</a>
                      <br><br>
                      <form class="post-like" action="\altaLikeDetalle" method="post">
                        @csrf
                        <input type="hidden" name="post_id" value="{{$posteo->id}}">
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="type_id" value="{{$posteo->type_id}}">
                        @if (Auth::user()->id!=$posteo->user_id)
                        <button type="submit" class="btn btn-outline-light btn-sm  btn-post-like" >
                          <img  src="/imagenes_sitio/_ionicons_svg_md-thumbs-up.svg" height="10" width="15">
                        </button>
                        <p>Me interesa!!</p>
                        @endif
                      </form>
                  </div>
                  </article>
                </div>
              </section>

              <div class="d-flex justify-content-center btn-action">
                <form class="" action="\modifPosteos\{{$posteo->id}}" method="post">
                  @csrf
                  <button type="submit" class="btn btn-primary" >
                    Modificar Posteo
                  </button>
                </form>
                <form class="" action="/borrarPosteo"   method="post">
                  @csrf
                  <input type="hidden" name="id" value="{{$posteo->id}}">
                  <input type="hidden" name="user_id" value="{{$posteo->user_id}}">
                  <button type="submit" class="btn btn-danger">
                      {{ __('Borrar Posteo') }}
                  </button>
                </form>
                <a href="\" class="btn btn-link">Volver</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endguest

@endsection
