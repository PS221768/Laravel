<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/voetballers/create" method="POST">
    @csrf
        <label for="FirstName">First name:</label><br>
        <input type="text" name="FirstName"><br>
        @error('FirstName')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="PrefixName">Prefix name:</label><br>
        <input type="text" name="PrefixName"><br>
        @error('PrefixName')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="LastName">Last name:</label><br>
        <input type="text" name="LastName"><br>
        @error('LastName')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit">create</button>
    </form>

</body>
</html>