@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                  <form action="/login" method="POST">
                  @csrf
            	        <div class="field-group">
            	          <label for="email">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" value="">
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
            	        </div>

                      <div class="field-group">
                        <label for="password">Contraseña</label>
                        <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" value="">
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="form-group row">
                          <div class="col-md-6">
                  					<div class=" remember-me form-check">
                  					  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  						<label for="rememberMe">Recordarme</label><br>
                  					</div>
                  			</div>
                      </div>

            					<button type="submit" class="btn btn-primary" name="send"><strong>Ingresar</strong></button>
                      <a href="{{ route('password.request') }}">Olvidaste tu Contraseña</a>
                      <a class="btn btn-outline-secondary float-right" href="index.php">Cancelar</a>

            	      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
