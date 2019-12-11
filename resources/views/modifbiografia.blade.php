@extends('layouts.app')

@section('content')

@dd($biography) 

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">

                  <div class="card-header">{{ __('MI BIOGRAFIA') }}</div>

                  <div class="card-body">

                      <form method="POST" action="/modifbiografia"  enctype="multipart/form-data">
                          @csrf

                          <div class="form-group row">
                              <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                              <div class="col-md-6">
                                  <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror"
                                      name="first_name" value=@if ($biography->first_name != null) {{$biography->first_name}}"{{ old('first_name') }} @endif"
                                      required autocomplete="first_name" autofocus>

                                  @error('first_name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>
                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror"
                                    name="last_name" value=@if ($biography->last_name != null) {{$biography->last_name}}"{{ old('last_name') }} @endif"
                                    required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="genre" class="col-md-4 col-form-label text-md-right">{{ __('Género') }}</label>
                            <div class="col-md-6">
                                <input id="genre" type="radio" class="form-control @error('genre') is-invalid @enderror"
                                  name="genre" value=@if ($biography->genre != null) {{$biography->genre}}"{{ old('genre') }} @endif"
                                  autofocus>"F"

                                @error('genre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>
                          <div class="col-md-6">
                              <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror"
                                name="birth_date" value=@if ($biography->birth_date != null) {{$biography->birth_date}}"{{ old('birth_date') }} @endif"
                                autofocus>

                              @error('birth_date')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>
                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                              name="phone" value=@if ($biography->phone != null) {{$biography->phone}}"{{ old('phone') }} @endif"
                              autofocus>

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Domicilio') }}</label>
                      <div class="col-md-6">
                          <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                            name="address" value=@if ($biography->address != null) {{$biography->address}}"{{ old('address') }} @endif"
                            autofocus>

                          @error('address')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                    <div class="form-group row">
                      <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>
                      <div class="col-md-6">
                          <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                            name="city" value=@if ($biography->city != null) {{$biography->city}}"{{ old('city') }} @endif"
                            autofocus>

                          @error('city')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row">
                    <label for="studies" class="col-md-4 col-form-label text-md-right">{{ __('Estudios') }}</label>
                    <div class="col-md-6">
                        <input id="studies" type="text" class="form-control @error('studies') is-invalid @enderror"
                          name="studies" value=@if ($biography->studies != null) {{$biography->studies}}"{{ old('studies') }} @endif"
                          autofocus>

                        @error('studies')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                  <label for="degree" class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>
                  <div class="col-md-6">
                      <input id="degree" type="text" class="form-control @error('degree') is-invalid @enderror"
                        name="degree" value=@if ($biography->degree != null) {{$biography->degree}}"{{ old('degree') }} @endif"
                        autofocus>

                      @error('degree')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                <label for="file_cv" class="col-md-4 col-form-label text-md-right">{{ __('CV') }}</label>

                <div class="col-md-6">
                    <input id="file_cv" type="file" class="form-control" name="file_cv">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Biografia') }}
                    </button>
                </div>
            </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection
