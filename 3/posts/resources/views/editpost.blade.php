<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form class="" action="edit/{{ $post->id }}" method="post">
  <input type="text" name="title" value="{{ $post->title }}">
  <input type="text" name="content" value="{{ $post->content }}">
  <input type="text" name="date" value="{{ $post->date }}">
  <input type="submit" name="" value="asd">
</form>
  </body>
</html>
