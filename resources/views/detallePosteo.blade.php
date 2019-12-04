<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title></title>
  </head>
  <body>
    <h2>Detalle de Posteo</h2>
    <img  src="/storage/posteo/{{$posteo->image}}">
    <p>{{$posteo->title}}</p>
    <p>{{$posteo->description}}</p>
    <a href="//{{$posteo->link}}" target="_blank" >{{$posteo->link}}</a>

  </body>
</html>
