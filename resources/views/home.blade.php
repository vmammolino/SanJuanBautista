@extends('template')
@section('title', 'Home')

@section('content')
<div class="container">
 @guest

<!-- comenamos para reemplazar por lo nuevo

  <div class="d-flex flex-row-reverse flex-wrap">
   <div class="d-flex">
     <a class="btn btn-success" href="login.php">Login</a>
     <a class="btn btn-primary" href="registracion.php">Registrarse</a>
   </div>
   <img  class="banner-inicial" src="images/inicio.png">-->

   <!-- aca empieza lo mio -->
   <div class="content">
           <!-- <img  class="banner-inicial" src="/imagenes_sitio/fondo-cielo.png"> -->

             @if (Route::has('login'))
               <div class="row">
             @auth
                 <a href="{{ url('/home') }}">Home</a>
                 @else
                 <div class="col-xs-8">
                   <img src="/imagenes_sitio/logo.png" class="img-circle" alt="Logo SJB" width="150" height="150">
                 <div class="col-xs-6">
                  <a class="btn btn-success" href="{{ route('login') }}">LOGIN</a>
                 </div>
                 <div class="col-xs-6">
                 @if (Route::has('register'))

                 <a class="btn btn-primary" href="{{ route('register') }}">REGISTRO</a>
                 </div>
                 @endif
              @endauth
               </div>
             @endif


   <!-- hasta aca-->


 @else
     <div class="d-flex flex-row-reverse flex-wrap">
       <a class="btn btn-danger" href="logout.php">Logout</a>
       <img class="avatar" src="/storage/avatar/{{Auth::user()->avatar}}">
       <span>Hola {{Auth::user()->email}}</span>
    </div>

      <section class="posteos">

        <article class="post">
          <h2>OFERTAS DE TRABAJO</h2>
          <div class="photo-container">
            <a href="/posteoPorTipo/1" >
              <img class="photo" src="/imagenes_sitio/trabajo.jpg" alt="foto trabajo">
            </a>
          </div>
         </article>

        <article class="post">
          <h2>OFERTAS DE CAPACITACIÓN</h2>
          <div class="photo-container">
            <a href="/posteoPorTipo/2" >
              <img class="photo" src="/imagenes_sitio/capacitacion.png" alt="foto capacitacion">
            </a>
          </div>
        </article>

        <article class="post">
          <h2>EMPRENDIMIENTOS</h2>
          <div class="photo-container">
            <a href="/posteoPorTipo/3" >
              <img class="photo" src="/imagenes_sitio/emprendimiento.jpg" alt="foto emprendimiento">
            </a>
          </div>
        </article>

        <article class="post">
          <h2>OBTENER TÍTULO</h2>
          <div class="photo-container">
            <a href="/posteoPorTipo/4" >
              <img class="photo" src="/imagenes_sitio/graduacion.jpg" alt="foto graduacion">
            </a>
          </div>
        </article>

      </section>
    @endguest

    </div>
    </div>

</div>
@endsection
