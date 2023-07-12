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
<h1>El super video</h1>
<p>titulo: {{$video->title}}</p>
<p>url: {{$video->url}}</p>
@foreach($comments as $comment)
   <p>Comentario:{{$comment->body}}</p>
@endforeach
<a class="btn btn-primary" href={{route('comment.createVideo', ['video_id' => $video->id])}}>Crear Comentario</a>
</body>
</html>
