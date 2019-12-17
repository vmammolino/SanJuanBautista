
@extends('layouts.app')

@section('content')


 {{-- @dd($biography) --}}

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('Mi Biografía') }}</div>
                    <div class="card-body">

                      @forelse ($biography as $regbio)

                        <div class="form-group row">
                          <div class="col-md-6">
                            <p>Nombre: {{$regbio->first_name}}</p>
                          </div>
                          <div class="col-md-6">
                            <p>Apellido: {{$regbio->last_name}}</p>
                          </div>
                          <div class="col-md-6">
                            <p>Fecha Nacimiento: {{date('d/m/Y', strtotime($regbio->birth_date))}}</p>
                            {{-- <p>Fecha Nacimiento: {{$regbio->birth_date}}</p> --}}
                          </div>
                          <div class="col-md-6">
                            <p>Celular: {{$regbio->phone}}</p>
                          </div>
                          <div class="col-md-6">
                            <p>Domicilio: {{$regbio->address}}</p>
                          </div>
                          <div class="col-md-6">
                            <p>Localidad: {{$regbio->city}}</p>
                          </div>
                          <div class="col-md-6">
                            <p>Estudios: {{$regbio->studies}}</p>
                            <p>Título obtenido: {{$regbio->degree}}</p>
                          </div>
                          <div class="col-md-2">
                            <p>Archivo con CV: </p>
                          </div>
                          <a href="/storage/cv/{{$regbio->file_cv}}" target="_blank" class="file-cv">
                            <img src="/storage/cv/{{$regbio->file_cv}}"  height="100" width="75">
                          </a>
                        </div>

                        @csrf
                        <div class="d-flex justify-content-center btn-action">
                          <a href="/modifbiografia/{{$regbio->id}}" class="btn btn-primary">Actualizar Biografía</a>
                          <a href="\"class="btn btn-link">Volver</a>
                        </div>

                      @empty
                        <div class="form-group row">
                          <div class="col-md-6">
                            <h5>No cargaste tu biografía aún</h5><br>

                            <div class="d-flex justify-content-center btn-action">
                              <a href="/altabiografia" class="btn btn-primary">Cargar Biografía</a>
                              <a href="\"class="btn btn-link">Volver</a>
                            </div>

                          </div>
                        </div>

                      @endforelse

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

  @endsection
