<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Crear comentario</h1>
<form action="{{route("comment.store")}}" method="post">
    @csrf
    <label for="body"></label>
    <input type="text" id="body" name="body">
    <input type="text" id="commentable_id" name="commentable_id" value="{{$video->id}}">
    <input type="text" id="commentable_type" name="commentable_type" value="video">
    <button type="submit">Crear</button>
</form>
</body>
</html>
