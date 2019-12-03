@extends('template')
@section('title', 'Home')

@section('content')
<div class="container">
 @guest
  <div class="d-flex flex-row-reverse flex-wrap">
   <div class="d-flex">
     <a class="btn btn-success" href="login.php">Login</a>
     <a class="btn btn-primary" href="registracion.php">Registrarse</a>
   </div>
   <img  class="banner-inicial" src="images/inicio.png">

 @else
     <div class="d-flex flex-row-reverse flex-wrap">
       <a class="btn btn-danger" href="logout.php">Logout</a>
       <img class="avatar" src="avatar/{{Auth::user()->avatar}}">
       <span>Hola {{Auth::user()->email}}</span>
    </div>

      <section class="posteos">
        <article class="post">
          <h2>OFERTAS DE TRABAJO</h2>
          <div class="photo-container">
            <img class="photo" src="images/trabajo.jpg" alt="foto 01">
            <a class="more" href="#">ver más</a>
          </div>
          <p>Breve descripción del post.</p>
        </article>
        <article class="post">
          <h2>OFERTAS DE CAPACITACIÓN</h2>
          <div class="photo-container">
            <img class="photo" src="images/capacitacion.png" alt="foto 01">
            <a class="more" href="#">ver más</a>
          </div>
          <p>Breve descripción del post.</p>
        </article>
        <article class="post">
          <h2>OBTENER TÍTULO</h2>
          <div class="photo-container">
            <img class="photo" src="images/graduacion.jpg" alt="foto 01">
            <a class="more" href="#">ver más</a>
          </div>
          <p>Breve descripción del post.</p>
        </article>
        <article class="post">
          <h2>EMPRENDIMIENTOS</h2>
          <div class="photo-container">
            <img class="photo" src="images/emprendimiento.jpg" alt="foto 01">
            <a class="more" href="#">ver más</a>
          </div>
          <p>Breve descripción del post.</p>
        </article>

      </section>
    @endguest

    </div>
    </div>

</div>
@endsection
