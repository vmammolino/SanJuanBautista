@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Mi Biografía') }}</div>
            <div class="card-body">

              <form method="POST" action="/altabiografia"  enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                    <div class="col-md-6">
                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
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
                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="genre" class="col-md-4 col-form-label text-md-right">{{ __('Género') }}</label>
                    <input id="genre" type="radio" class="@error('genre') is-invalid @enderror"
                    name="genre" value=1 required autocomplete="genre" autofocus> Femenino
                    <input id="genre" type="radio" class="@error('genre') is-invalid @enderror"
                    name="genre" value=2 required autocomplete="genre" autofocus> Masculino
                    <div class="col-md-6">
                        {{-- <input id="genre" type="text" class="form-control @error('genre') is-invalid @enderror" name="genre" value="{{ old('genre') }}" required autocomplete="genre" autofocus> --}}
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
                        <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}" required autocomplete="birth_date" autofocus>
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
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
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
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
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
                        <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
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
                        <input id="studies" type="text" class="form-control @error('studies') is-invalid @enderror" name="studies" value="{{ old('studies') }}" required autocomplete="studies" autofocus>
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
                        <input id="degree" type="text" class="form-control @error('degree') is-invalid @enderror" name="degree" value="{{ old('degree') }}" required autocomplete="degree" autofocus>
                        @error('degree')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="file_cv" class="col-md-4 col-form-label text-md-right">{{ __('Curriculum Vitae') }}</label>
                    <div class="col-md-6">
                        <input id="file_cv" type="file" class="form-control" name="file_cv">
                    </div>
                </div>

                <div class="d-flex justify-content-center btn-action">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Guardar') }}
                  </button>
                  <a href="\"class="btn btn-link">Volver</a>
                </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

{{-- </section>

  </body>
</html> --}}
