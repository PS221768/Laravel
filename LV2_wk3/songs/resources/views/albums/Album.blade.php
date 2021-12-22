@extends('layouts.main')
@section('title', 'album')
@section('content')
<div>
    @isset($album)
        <p> {{ $album->name }} - {{ $album->year }} - times sold: {{ $album->times_sold }} </p>
        <br/>
        <a href="/albums/edit/{{ $album->id}}">edit</a>
    @endisset
    
    @empty($album)
        <p>no album found with this id</p>
    @endempty
</div>

@endsection