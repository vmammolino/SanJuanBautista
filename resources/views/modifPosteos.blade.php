@extends('layouts.app')

@section('content')

  {{-- Ver si puedo pasar el usuario loggeado --}}
  @guest
    {{-- {{route(login)}}; --}}

  @else
{{-- @DD(Auth::user()->id!=$posteo->user_id); --}}

@if (Auth::user()->id!=$posteo->user_id)
  <h2>NO TENÉS AUTORIZACIÓN PARA MODIFICAR UN POSTEO DE OTRO USUARIO</h2>
@else


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('MODIFICACION DE POSTEO') }}</div>
                <div class="card-body">
                    <form method="POST" action="/modifPosteos"  enctype="multipart/form-data">
                        @csrf
                            <input id="id" type="hidden"  name="id" value="{{$posteo->id}}">
                            <input id="user_id" type="hidden"  name="user_id" value="{{$posteo->user_id}}">
                        <div class="form-group row">
                            <label for="type_id" class="col-md-4 col-form-label text-md-right">{{ __('CATEGORIA') }}</label>
                             <select name="type_id" id="type_id" >
                              @switch($posteo->type_id)
                              @case(1)
                              <option value="1" selected>TRABAJO</option>
                              <option value="2">CAPACITACION</option>
                              <option value="3">EMPRENDIMIENTOS</option>
                              <option value="4">GRADUACION</option>
                              @break
                              @case(2)
                              <option value="1">TRABAJO</option>
                              <option value="2" selected>CAPACITACION</option>
                              <option value="3">EMPRENDIMIENTOS</option>
                              <option value="4">GRADUACION</option>
                              @break
                              @case(3)
                              <option value="1">TRABAJO</option>
                              <option value="2">CAPACITACION</option>
                              <option value="3"selected>EMPRENDIMIENTOS</option>
                              <option value="4">GRADUACION</option>
                              @break
                              @case(4)
                              <option value="1">TRABAJO</option>
                              <option value="2">CAPACITACION</option>
                              <option value="3">EMPRENDIMIENTOS</option>
                              <option value="4"selected>GRADUACION</option>
                              @break
                              @endswitch
                             </select>
                                @error('type_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('TITULO') }}</label>
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
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('DESCRIPCIÓN') }}</label>
                            <div class="col-md-6">
                              <textarea id="description" rows="4" cols="50" name="description"> {{$posteo->description}}

                              </textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="link" class="col-md-4 col-form-label text-md-right">{{ __('CONTACTO') }}</label>

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
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('IMAGEN') }}</label>
                              <img  src="/storage/posteo/{{$posteo->image}}" height="75" width="75" >
                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="image">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                MODIFICAR
                                </button>
                            </div>
                        </div>
                      </form>
                      <form class="" action="/posteoPorUser/{{Auth::user()->id}}"   method="get">
                        {{-- @csrf --}}
                        <button type="submit" class="btn btn-link">
                         {{ __('VOLVER') }}
                       </form>

                  </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- </div> --}}
  @endguest
@endsection
