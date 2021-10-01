<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teams</title>
</head>
<body>
    @extends('layouts.app')
        @section('content')
            <ul class="list-inside">
            @foreach ($teams as $team)
                <li class="bg-gray-400 w-32">{{ $team }}</li>
            @endforeach
            </ul>
        @endsection
</body>
</html>