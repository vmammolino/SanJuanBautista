 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Biografia</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>

<body>

 @extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('Mi Biografía') }}</div>
                  <div class="card-body">
                  @forelse ($registro as $biografia)

                    <div class="form-group row">
                      <div class="col-md-6">
                        <p>Nombre: {{$biografia->first_name}}</p>
                      </div>
                      <div class="col-md-6">
                        <p>Apellido: {{$biografia->last_name}}</p>
                      </div>
                      <div class="col-md-6">
                        <p>Fecha Nacimiento: {{$biografia->birth_date}}</p>
                      </div>
                      <div class="col-md-6">
                        <p>Celular: {{$biografia->phone}}</p>
                      </div>
                      <div class="col-md-6">
                        <p>Domicilio: {{$biografia->address}}</p>
                      </div>
                      <div class="col-md-6">
                        <p>Localidad: {{$biografia->city}}</p>
                      </div>
                      <div class="col-md-6">
                        <p>Estudios: {{$biografia->studies}}</p>
                        <p>Título obtenido: {{$biografia->degree}}</p>
                      </div>
                      <div class="col-md-4">
                        <p>Archivo con CV: </p>
                      </div>
                        <img src="/storage/cv{{$biografia->file_cv}}">
                    </div>

                    <form method="POST" action="/modifbiografia">
                        @csrf
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar Biografia') }}
                                </button>
                            </div>
                        </div>
                      </form>
                    </div>


                  @empty
                    <div class="form-group row">
                      <p>No cargaste tu biografia aun</p>
                      <form method="POST" action="/altabiografia">
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
          </div>

  </section>

</body>
</html>
