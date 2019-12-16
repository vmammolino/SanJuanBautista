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
                    <h2 align="center">Bienvenido {{Auth::user()->name}}</h2><br><br>
                    @if ($like->isEmpty())
                      <div class="form-group row">
                        <div class="col-md-6">
                          <h5 align="center">No diste like aún</h5><br>
                          <div class="d-flex justify-content-center btn-action">
                              {{-- <a href="\abmposteos"class="btn btn-primary">Nuevo Posteo</a> --}}
                            <a href="\"class="btn btn-link">Volver</a>
                          </div>
                        </div>
                      </div>

                    @else

                      <div class="row justify-content-center">
                        <section class ="posteos">

                          @forelse ($like as $likes)

                              <a href="/posteo/{{$likes->post_id}}" >
                             {{$likes->post_id}}
                            <article class="one-post">
                              <a href="/posteo/{{$likes->post_id}}" >
                                {{-- <img  src="/storage/posteo/{{$likes->post_id-}}" height="150" width="150"> --}}
                              </a>
                              {{-- <a href="/posteo/{{$posteo->id}}"> --}}
                                {{-- <h5>{{$posteo->title}}</h5> --}}
                              </a>
                            </article>
                          @empty
                            <h5 align="center">No cargaste ningún posteo todavía</h5><br>
                          @endforelse
                        </section>
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
