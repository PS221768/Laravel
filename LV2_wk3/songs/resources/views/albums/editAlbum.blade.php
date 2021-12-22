@extends('layouts.main')
@section('title', 'Create album')
@section('content')
<body>
    @isset($album)
    <form action="/albums/edit/{{ $album->id }}" method="POST">
    @method('PUT')
    @csrf
            <label for="name">albums name:</label><br>
            <input id="name" type="text" name="name" value="{{ $album->name }}" required><br>
            @error('name')
                <div class="">{{ $message }}</div>
            @enderror
            <label for="year">year founded:</label><br>
            <input id="year" type="number" name="year" required><br>
            @error('year')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="times_sold">Times Sold:</label><br>
            <input id="times_sold" type="number" name="times_sold" required><br>
            @error('times_sold')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit">update</button>
    </form>
    <form action="/albums/delete/{{ $album->id }}" method="POST">
    @method('DELETE')
        @csrf
            <button type="submit">delete</button>
    </form>
    @endisset



    @empty($album)
        <p>no album found with this id</p>
    @endempty

</body>
@endsection