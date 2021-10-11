<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    {{ Form::open(array('url' => 'songs/create', 'method' => 'post')) }}
    @csrf
        <label for="fname">Song name:</label><br>
        <input type="text" name="soName"><br>
        <label for="fname">Singer name:</label><br>
        <input type="text" name="siName"><br>
        <button type="submit">create</button>
    {{ Form::close() }}
    
</body>
</html>