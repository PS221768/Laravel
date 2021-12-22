@extends('layouts.main')
@section('title', 'album')
@section('content')
<body>
    
    @isset($albums)
        <?php
            echo '<ul>';
            foreach($albums as $album){
                echo "<li>";
                echo "<a class='text-blue-400 hover:text-blue-600' bg-red-400 hover:bg-red-200 href='album/" . ($album->id) . "'>" . $album->name . " " . "</a>";
                echo "</li>";
            }
            echo '</ul>'
        ?>
    @endisset

    @empty($albums)
        <h1>
            er zijn momenteel geen albums beschikbaar
        </h1>
    @endempty

@endsection