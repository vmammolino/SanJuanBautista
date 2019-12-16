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
                            <article class="one-post">
                              <a href="/posteo/{{$posteo->id}}" >
                                <img  src="/storage/posteo/{{$posteo->image}}" height="150" width="150">
                              </a>
                              <a href="/posteo/{{$posteo->id}}">
                                <h5>{{$posteo->title}}</h5>
                              </a>
                            </article>

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
