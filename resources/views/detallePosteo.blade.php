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
                  <article class="one-post-detail">
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

                    <div class="post-image-detail" >
                      <img  src="/storage/posteo/{{$posteo->image}}">
                    </div>
                    <h4 class="post-title-detail">{{$posteo->title}}</h4>
                    <p class="post-desc">{{$posteo->description}}</p>
                    <a href="//{{$posteo->link}}" target="_blank" class="post-link" >{{$posteo->link}}</a>
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
                <a href="\"class="btn btn-link">Volver</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endguest

@endsection
