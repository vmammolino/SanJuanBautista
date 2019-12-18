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
                <div class="card-header">{{ __('Mis Likes') }}</div>
                  <div class="card-body">
                    <h2 align="center">Bienvenido {{Auth::user()->name}}</h2>
                    <h5 align="center">Estos son los posteos que más te gustaron.</h5><br><br>
                    @if ($like->isEmpty())
                      <div class="form-group row">
                        <div class="col-md-6">
                          <h5 align="center">No diste like aún</h5><br>
                          <div class="d-flex justify-content-center btn-action">
                            <a href="\"class="btn btn-link">Volver</a>
                          </div>
                        </div>
                      </div>

                    @else

                      <div class="row justify-content-center">
                        <section class ="posteos">

                          @forelse ($like as $likes)
                            @forelse ($post as $posteo)
                              @if ($likes->post_id==$posteo->id)


                                <div class="list-post">
                                  <article class="list-one-post" class="list-group-item list-group-item-action">
                                    <a href="/posteo/{{$posteo->id}}">
                                      <img  src="/storage/posteo/{{$posteo->image}}" height="30" width="30">
                                    </a>
                                    <a href="/posteo/{{$posteo->id}}">
                                      <h5>{{$posteo->title}}</h5>
                                    </a>
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

                              @endif

                              @empty
                                <h5 align="center">No likeaste ningún posteo todavía</h5><br>
                            @endforelse
                            @empty
                            <h5 align="center">No likeaste ningún posteo todavía</h5><br>
                          @endforelse
                        </section>
                      </div>
                      <div class="d-flex justify-content-center btn-action">
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
