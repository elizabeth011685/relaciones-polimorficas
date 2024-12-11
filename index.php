<?php

//agregar un comentario a una publicación

$post = \App\Models\Post::find(5);
$post->comments()->create(['body' => 'Buena publicación!']);

//agregar un comentario a un video

$video = \App\Models\Video::find(3);
$video->comments()->create(['body' => 'Buen video.']);

//obtener comentarios de una publicación

$post = \App\Models\Post::find(5);
$comments = $post->comments;

foreach ($comments as $comment) {
    echo $comment->body;
}

//obtener el modelo relacionado desde un comentario

$comment = \App\Models\Comment::find(1);
$related = $comment->commentable;
echo get_class($related);