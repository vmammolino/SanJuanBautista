<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Posteos</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

<h1>POSTEOS DE LA PÁGINA</h1>
<section class ="posteos">
  @forelse ($post as $posteo)
  <article class="posteo">
    <a href="/posteo/{{$posteo->id}}" >
      <img  src="/storage/posteo/{{$posteo->image}}">
    </a>
    <a href="/posteo/{{$posteo->id}}" >
    <p>{{$posteo->title}}</p>
    </a>
  </article>

  @empty
    <p>'No tenemos posteos disponibles'</p>

  @endforelse

</section>



  </body>
</html>
