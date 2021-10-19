<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@isset($car)
    <form action="/cars/edit/{{ $car->id }}" method="POST">
        @method('PUT')
        @csrf
            <label for="merk">merk naam:</label><br>
            <input id="merk" type="text" name="merk" value="{{ $car->merk }}"><br>
            @error('merk')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="type">type auto:</label><br>
            <input id="type" type="text" name="type" value="{{ $car->type }}"><br>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="bouwjaar">bouwjaar:</label><br>
            <input id="bouwjaar" type="number" name="bouwjaar" value="{{ $car->bouwjaar }}"><br>
            @error('bouwjaar')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit">update</button>
    </form>

    <form action="/cars/delete/{{ $car->id }}" method="POST">
    @method('DELETE')
    @csrf
        <button type="submit">delete</button>
    </form>
@endisset

@empty($car)
    <p>no car found with this id</p>
@endempty
    
</body>
</html>