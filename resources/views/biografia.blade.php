
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
                            <p>Fecha Nacimiento: {{$regbio->birth_date}}</p>
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
                          <div class="col-md-4">
                            <p>Archivo con CV: </p>
                          </div>
                            <img src="/storage/cv{{$regbio->file_cv}}">
                        </div>

                        @csrf
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                              <a href="/modifbiografia/{{$regbio->id}}" class="btn btn-primary">Actualizar Biografia</a>
                            </div>
                        </div>

                        </div>

                      @empty
                        <div class="form-group row">
                          <h5>No cargaste tu biografia aun</h5><br>
                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                <a href="/altabiografia" class="btn btn-primary">Cargar Biografia</a>
                              </div>
                          </div>

{{--
                          <form method="POST" action="/altabiografia" enctype="multipart/form-data">

                              @csrf
                              <div class="form-group row mb-0">
                                  <div class="col-md-6 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Cargar Biografia') }}
                                      </button>
                                  </div>
                              </div>
                            </form> --}}

                          </div>

                      @endforelse

                  </div>
                </div>
              </div>
            </div>

  @endsection
