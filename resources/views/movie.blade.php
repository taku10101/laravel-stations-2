<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        映画一覧
    </title>
</head>
<body>
    <ul>
    @foreach ($movies as $movie)
    $table->string('title');
    $table->string('image_url');
    $table->integer('published_year');
    $table->string('description');
    $table->boolean('is_showing');
        <li>
  {{ $movie->title }}
    <img src="{{ $movie->image_url }}" alt="{{ $movie->title }}">
    <p>{{ $movie->published_year }}年公開</p>
    <p>{{ $movie->description }}</p>
    <p>{{ $movie->is_showing ? '公開中' : '公開予定' }}</p>



        </li>
    @endforeach
    </ul>
</body>
</html>