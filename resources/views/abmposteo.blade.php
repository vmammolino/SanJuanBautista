@extends('layouts.app')

@section('content')

  {{-- Ver si puedo pasar el usuario loggeado --}}
  @guest
    {{-- {{route(login)}}; --}}

  @else
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ABM Posteos') }}</div>
                <div class="card-body">
                    <form method="POST" action="/abmposteos"  enctype="multipart/form-data">
                        @csrf
{{-- @dd(Auth::user()->name) --}}
                        <div class="form-group row">
                          <label for="type_id" class="col-md-4 col-form-label text-md-right">{{ __('Categoría') }}</label>
                            {{--  --}}
                          <div class="col-md-6">
                            <select name="type_id" id="type_id">
                              <option value="1">Trabajo</option>
                              <option value="2">Capacitación</option>
                              <option value="3">Emprendimientos</option>
                              <option value="4">Graduación</option>
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
                              <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
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
                            <textarea class="field-text-area" id="description" name="description" rows="5"></textarea>
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
                              <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}" required autocomplete="link" autofocus>

                              @error('link')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Imágen') }}</label>

                          <div class="col-md-6">
                              <input id="image" type="file" class="form-control" name="image">
                          </div>
                        </div>

                        <div class="d-flex justify-content-center btn-action">
                          <button type="submit" class="btn btn-primary">Guardar</button>
                          <button type="reset" class="btn btn-danger">Borrar</button>
                          <a href="\"class="btn btn-link">Volver</a>
                        </div>

                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endguest

@endsection
