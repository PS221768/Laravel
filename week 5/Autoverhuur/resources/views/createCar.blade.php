<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    {{ Form::open(array('url' => 'cars/create', 'method' => 'post')) }}
    @csrf
        <label for="fname">merk naam:</label><br>
        <input type="text" name="merk"><br>
        <label for="fname">type auto:</label><br>
        <input type="text" name="type"><br>
        <label for="fname">bouwjaar:</label><br>
        <input type="number" name="bouwjaar"><br>
        <button type="submit">create</button>
    {{ Form::close() }}
    
</body>
</html>