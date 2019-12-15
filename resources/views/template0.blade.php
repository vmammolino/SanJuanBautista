<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="css/style.css">

</head>

<div class="contenedor">

 <header class="main-header">
   <img  class="logo" src="/imagenes_sitio/logo.png" alt="Logo San Juan Bautista">
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
 </header>

@yield('content')


</div>



  <!-- saco el footer
  <footer>
   <nav class="main-footer">
     <img  class="logo-footer" src="images/logo-footer.png" alt="logotipo">
     <ul>
       <li><a href="#">Contacto</a></li>
       <li><a href="#">Quiero Ayudar</a></li>
     </ul>
   </nav>
  </footer>  -->

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
