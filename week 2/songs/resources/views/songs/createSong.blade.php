<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    {{ Form::open(array('url' => '/songs/create', 'method' => 'post')) }}
    @csrf
        <label for="title">Song name:</label><br>
        <input id="title" type="text" name="title" required><br>
        @error('title')
            <div class="">{{ $message }}</div>
        @enderror
        <label for="singer">Singer name:</label><br>
        <input id="singer" type="text" name="singer" required><br>
        @error('singer')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit">create</button>
    {{ Form::close() }}

</body>
</html>