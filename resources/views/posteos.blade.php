<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Posteos</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

<h1>POSTEOS DE LA PÁGINA</h1>
<ul>@forelse ($post as $posteo)
  <li>
    <p>{{$posteo->image}}</p>
    <p>{{$posteo->title}}</p>
    <p>{{$posteo->description}}</p>
    <p>{{$posteo->link}}</p>
  </li>
@empty
  <p>'No tenemos posteos disponibles'</p>

@endforelse
</ul>


  </body>
</html>
