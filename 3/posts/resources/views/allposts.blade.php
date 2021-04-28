<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    @foreach ($posts as $key => $el)
    <h2>{{ $el["id"] }} {{ $el["title"] }}</h2>
     <p>{{ $el["content"]}}</p>
     <p>{{ $el["date"]}}</p>
    @endforeach

  </body>
</html>
