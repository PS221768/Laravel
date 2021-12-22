<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    {{ Form::open(array('url' => '/bands/create', 'method' => 'post')) }}
    @csrf
        <label for="name">Band name:</label><br>
        <input id="name" type="text" name="name" required><br>
        @error('name')
            <div class="">{{ $message }}</div>
        @enderror
        <label for="year">year founded:</label><br>
        <input id="year" type="text" name="year" required><br>
        @error('year')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit">create</button>
    {{ Form::close() }}

</body>
</html>