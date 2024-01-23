<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        @foreach ($posts as $post)
            <div>
                <h2 text-3xl font-bold underline>{{$post->title}}</h2>
            </div>
        @endforeach

        {{$posts->links()}}
    </body>
</html>
