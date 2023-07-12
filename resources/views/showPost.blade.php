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
<h1>El super post</h1>
<p>titulo: {{$post->title}}</p>
<p>body: {{$post->body}}</p>
<a class="btn btn-primary" href={{route('comment.createPost', ['post_id' => $post->id])}}>Crear Comentario</a>
</body>
</html>
