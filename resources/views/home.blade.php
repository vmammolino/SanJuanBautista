
@extends('template')
@section('title', 'Home')

@section('content')


  <div class="contenedor">

   <header class="main-header">
     <img  class="logo" src="/imagenes_sitio/logo.png" alt="Logo San Juan Bautista">
     @guest

     @else
       <div class="dropdown">
         <a class="btn btn btn-outline-primary dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <img class="avatar" src="/storage/avatar/{{Auth::user()->avatar}}">
           <span>{{Auth::user()->name}}</span>
         </a>

       <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
           <a class="dropdown-item" href="/biografia/{{Auth::user()->id}}">Biografia</a>
           <a class="dropdown-item" href="/posteoPorUser/{{Auth::user()->id}}">Mis Posteos</a>
           <form class="" action="/logout" method="post">
             @csrf
             <button class="dropdown-item" type="submit" name="button">Cerrar Sesion</button>
           </form>

         </div>
       </div>

     @endguest
   </header>


 @guest
      <div class="btn-container">
<!--    <img src="/imagenes_sitio/logo.png" class="logo" alt="Logo SJB" width="150" height="150">  -->

         <a class="btn btn-light btn-block" href="{{ route('login') }}" role="button">Login</a>
         <a class="btn btn-light btn-block" href="{{ route('register') }}" role="button">Registrarme</a>

     </div>

   @else
    <body style="background-image: none">
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
            <h2>CAPACITACIONES</h2>
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

  @endsection
