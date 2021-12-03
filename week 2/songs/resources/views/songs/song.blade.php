<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>song</title>
</head>
<body>
@isset($song)
    <p> {{ $song->title }} - {{ $song->singer }} </p>
@endisset

@empty($song)
    <p>no song found with this id</p>
@endempty
    
</body>
</html>