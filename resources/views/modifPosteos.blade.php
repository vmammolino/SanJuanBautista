@extends('layouts.app')

@section('content')

  {{-- Ver si puedo pasar el usuario loggeado --}}
  @guest
    {{-- {{route(login)}}; --}}

  @else
{{-- @DD(Auth::user()->id!=$posteo->user_id); --}}

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Posteos') }}</div>
          <div class="card-body">

            @if (Auth::user()->id!=$posteo->user_id)
              <h3>No tenés autorización para modificar un posteo de otro usuario</h3>
              <div class="d-flex justify-content-center btn-action">
                <a href="\"class="btn btn-link">Volver</a>
              </div>
            @else

              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-md-8">
                          <div class="card">
                              <div class="card-header">{{ __('Modificar Posteo') }}</div>
                              <div class="card-body">
                                  <form method="POST" action="/modifPosteos"  enctype="multipart/form-data">
                                      @csrf
                                      <input id="id" type="hidden"  name="id" value="{{$posteo->id}}">
                                      <input id="user_id" type="hidden"  name="user_id" value="{{$posteo->user_id}}">
                                      <div class="form-group row">
                                        <label for="type_id" class="col-md-4 col-form-label text-md-right">{{ __('Categoría') }}</label>
                                        <div class="col-md-6">
                                           <select name="type_id" id="type_id" >
                                            @switch($posteo->type_id)
                                            @case(1)
                                            <option value="1" selected>Trabajo</option>
                                            <option value="2">Capacitación</option>
                                            <option value="3">Emprendimiento</option>
                                            <option value="4">Graduación</option>
                                            @break
                                            @case(2)
                                            <option value="1">Trabajo</option>
                                            <option value="2" selected>Capacitación</option>
                                            <option value="3">Emprendimiento</option>
                                            <option value="4">Graduación</option>
                                            @break
                                            @case(3)
                                            <option value="1">Trabajo</option>
                                            <option value="2">Capacitación</option>
                                            <option value="3"selected>Emprendimiento</option>
                                            <option value="4">Graduación</option>
                                            @break
                                            @case(4)
                                            <option value="1">Trabajo</option>
                                            <option value="2">Capacitación</option>
                                            <option value="3">Emprendimiento</option>
                                            <option value="4"selected>Graduación</option>
                                            @break
                                            @endswitch
                                           </select>
                                              @error('type_id')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                          </div>
                                        </div>

                                      <div class="form-group row">
                                          <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Título') }}</label>
                                          <div class="col-md-6">
                                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$posteo->title }}" required autocomplete="title" autofocus>
                                              @error('title')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                                          <div class="col-md-6">
                                            <textarea id="description" name="description" rows="5" class="field-text-area" name="description">
                                              {{$posteo->description }}
                                            </textarea>
                                              @error('description')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label for="link" class="col-md-4 col-form-label text-md-right">{{ __('Link o Contacto') }}</label>

                                          <div class="col-md-6">
                                              <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{$posteo->link}}" required autocomplete="link" autofocus>

                                              @error('link')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                          </div>
                                      </div>

                                      <div class="form-group row">
                                          <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>
                                            <img  src="/storage/posteo/{{$posteo->image}}" height="75" width="75" >
                                          <div class="col-md-6">
                                              <input id="image" type="file" class="form-control" name="image">
                                          </div>
                                      </div>

                                      <div class="d-flex justify-content-center btn-action">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                        <a href="\"class="btn btn-link">Volver</a>
                                      </div>

                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              @endif
{{-- </div> --}}
  @endguest
@endsection
