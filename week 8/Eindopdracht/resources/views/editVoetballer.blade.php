<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@isset($voetballer)
    <form action="/voetballers/edit/{{ $voetballer->id }}" method="POST">
        @method('PUT')
        @csrf
            <label for="FirstName">FirstName:</label><br>
            <input id="FirstName" type="text" name="FirstName" value="{{ $voetballer->FirstName }}"><br>
            @error('FirstName')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="PrefixName">PrefixName</label><br>
            <input id="type" type="text" name="PrefixName" value="{{ $voetballer->PrefixName }}"><br>
            @error('PrefixName')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="LastName">bouwjaar:</label><br>
            <input id="LastName" type="text" name="LastName" value="{{ $voetballer->LastName }}"><br>
            @error('LastName')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit">update</button>
    </form>

    <form action="/voetballers/delete/{{ $voetballer->id }}" method="POST">
    @method('DELETE')
    @csrf
        <button type="submit">delete</button>
    </form>
@endisset

@empty($voetballer)
    <p>no voetballer found with this id</p>
@endempty
    
</body>
</html>