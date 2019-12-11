
@extends('layouts.app')

@section('content')

  {{-- @dd($biografia) --}}

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('Mi Biografía') }}</div>
                    <div class="card-body">

                      @forelse ($biografia as $biography)

                        <div class="form-group row">
                          <div class="col-md-6">
                            <p>Nombre: {{$biography->first_name}}</p>
                          </div>
                          <div class="col-md-6">
                            <p>Apellido: {{$biography->last_name}}</p>
                          </div>
                          <div class="col-md-6">
                            <p>Fecha Nacimiento: {{$biography->birth_date}}</p>
                          </div>
                          <div class="col-md-6">
                            <p>Celular: {{$biography->phone}}</p>
                          </div>
                          <div class="col-md-6">
                            <p>Domicilio: {{$biography->address}}</p>
                          </div>
                          <div class="col-md-6">
                            <p>Localidad: {{$biography->city}}</p>
                          </div>
                          <div class="col-md-6">
                            <p>Estudios: {{$biography->studies}}</p>
                            <p>Título obtenido: {{$biography->degree}}</p>
                          </div>
                          <div class="col-md-4">
                            <p>Archivo con CV: </p>
                          </div>
                            <img src="/storage/cv{{$biography->file_cv}}">
                        </div>

                        {{-- <form method="POST" action="/modifbiografia/{{$biography}}" enctype="multipart/form-data"> --}}

                            @csrf
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a href="/modifbiografia/{{$biography}}" class="btn btn-primary">Actualizar Biografia</a>

                                    {{-- <button type="submit" class="btn btn-primary">
                                        {{ __('Actualizar Biografia') }}
                                    </button> --}}
                                </div>
                            </div>
                          {{-- </form> --}}
                        </div>

                      @empty
                        <div class="form-group row">
                          <p>No cargaste tu biografia aun</p>
                          <form method="POST" action="/altabiografia/{{$user_id}}" enctype="multipart/form-data">

                              @csrf
                              <div class="form-group row mb-0">
                                  <div class="col-md-6 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Cargar Biografia') }}
                                      </button>
                                  </div>
                              </div>
                            </form>
                          </div>

                      @endforelse

                  </div>
                </div>
              </div>
            </div>

  @endsection
