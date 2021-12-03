<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>



@isset($band)
<form action="/bands/edit/{{ $band->id }}" method="POST">
 @method('PUT')
 @csrf
        <label for="name">Band name:</label><br>
        <input id="name" type="text" name="name" value="{{ $band->name }}" required><br>
        @error('name')
            <div class="">{{ $message }}</div>
        @enderror
        <label for="year">year founded:</label><br>
        <input id="year" type="number" name="year" required><br>
        @error('singer')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit">update</button>
</form>
<form action="/bands/delete/{{ $band->id }}" method="POST">
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