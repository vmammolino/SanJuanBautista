
@extends('template')
@section('title', 'Home')

@section('content')

  <div class="contenedor">

    <header class="main-header">
      <img  class="logo" src="/imagenes_sitio/logo.png" alt="Logo San Juan Bautista">
    </header>

     @guest
       <div class="fondo-container">
         <div class="btn-login-register">
            <a class="btn btn-light btn-block" href="{{ route('login') }}" role="button">Login</a>
            <a class="btn btn-light btn-block" href="{{ route('register') }}" role="button">Registrarme</a>
         </div>
      </div>

     @else

       <section class="posteos">

         <div class="dropdown">
           <a class="btn btn btn-outline-light dropdown-toggle button-menu" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <img class="avatar" src="/storage/avatar/{{Auth::user()->avatar}}">
             <span>{{Auth::user()->name}}</span>
           </a>

           <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
             <a class="dropdown-item" href="/biografia/{{Auth::user()->id}}">Biografia</a>
             <a class="dropdown-item" href="/posteoPorUser/{{Auth::user()->id}}">Mis Posteos</a>
             <a class="dropdown-item" href="/likesPorUser/{{Auth::user()->id}}">Mis Likes</a>
             <form class="" action="/logout" method="post">
               @csrf
               <button class="dropdown-item" type="submit" name="button">Cerrar Sesion</button>
             </form>

           </div>
         </div>

         <div class="post-types">

           <div class="photo-title-container">
             <div class="photo-container">
               <a href="/posteoPorTipo/1" >
                 <img class="photo" src="/imagenes_sitio/trabajo.jpg" alt="foto trabajo">
               </a>
              </div>
              <div class="title-container">
                <h3>OFERTAS DE TRABAJO</h3>
              </div>
         </div>

         <div class="photo-title-container">
           <div class="photo-container">
             <a href="/posteoPorTipo/2" >
               <img class="photo" src="/imagenes_sitio/capacitacion.jpg" alt="foto capacitacion">
             </a>
            </div>
            <div class="title-container">
              <h3>CAPACITACIONES</h3>
            </div>
         </div>

         <div class="photo-title-container">
           <div class="photo-container">
             <a href="/posteoPorTipo/3" >
               <img class="photo" src="/imagenes_sitio/emprendimiento.jpg" alt="foto emprendimiento">
             </a>
            </div>
            <div class="title-container">
              <h3>EMPRENDIMIENTOS</h3>
            </div>
         </div>

         <div class="photo-title-container">
           <div class="photo-container">
             <a href="/posteoPorTipo/4" >
               <img class="photo" src="/imagenes_sitio/examenes.jpg" alt="foto examenes">
             </a>
            </div>
            <div class="title-container">
                <h3>QUIERO RECIBIRME</h3>
            </div>
         </div>

      </section>

     @endguest

  @endsection
