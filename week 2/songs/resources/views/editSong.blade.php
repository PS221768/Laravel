<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>



@isset($song)
<form action="/songs/edit/{{ $song->id }}" method="POST">
 @method('PUT')
 @csrf
        <label for="title">Song name:</label><br>
        <input id="title" type="text" name="title" value="{{ $song->title }}" required><br>
        @error('title')
            <div class="">{{ $message }}</div>
        @enderror
        <label for="singer">Singer name:</label><br>
        <input id="singer" type="text" name="singer" required><br>
        @error('singer')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit">update</button>
</form>
<form action="/songs/delete/{{ $song->id }}" method="POST">
 @method('DELETE')
    @csrf
        <button type="submit">delete</button>
</form>
@endisset



@empty($song)
    <p>no song found with this id</p>
@endempty





</body>
</html>