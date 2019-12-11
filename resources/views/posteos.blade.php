@extends('template')
@section('title', 'Posteos')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
          {{-- <h2>Bien venido "{{Auth::user()->name}}".Estos son tus posteos</h2> --}}
          <section class ="posteos">
            @forelse ($post as $posteo)
              <article class="posteo">
                <a href="/posteo/{{$posteo->id}}" >
                  <img  src="/storage/posteo/{{$posteo->image}}" width="150px" heigth="150px">
                </a>
                <a href="/posteo/{{$posteo->id}}" >
                  <p>{{$posteo->title}}</p>
                </a>
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
      {{-- <form class="" action="\abmposteos" method="get">
          @csrf
        <button type="submit" class="btn btn-success" >
          CARGAR
          NUEVO
        </button>
      </form> --}}
<a href="\abmposteos"class="btn btn-success">CARGAR NUEVO</a>
    </div>
    <div class="">
      <form class="" action="\" method="get">
          @csrf
        <button type="submit" class="btn btn-link"> >
          VOLVER
        </button>
      </form>
    </div>
  </div>
  </div>
@endsection
