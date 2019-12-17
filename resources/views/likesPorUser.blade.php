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
                    <h3 align="center">Estos son los posteos que más te gustaron.</h3><br><br>
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
                              <article class="one-post">
                                <a href="/posteo/{{$posteo->id}}">
                                  <img  src="/storage/posteo/{{$posteo->image}}" height="150" width="150">
                                </a>
                                <a href="/posteo/{{$posteo->id}}">
                                  <h5>{{$posteo->title}}</h5>
                                </a>
                              </article>
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
