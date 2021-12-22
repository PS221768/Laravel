@extends('layouts.main')
@section('title', 'Create album')
@section('content')
<body>
    <form action="/albums/create/" method="POST">
        @csrf
            <label for="name">album name:</label><br>
            <input id="name" type="text" name="name" required><br>
            @error('name')
                <div class="">{{ $message }}</div>
            @enderror
            <label for="year">year:</label><br>
            <input id="year" type="text" name="year" required><br>
            @error('year')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="times_sold">Times sold :</label><br>
            <input id="times_sold" type="number" name="times_sold" required><br>
            @error('times_sold')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit">create</button>
    </form>
</body>
@endsection