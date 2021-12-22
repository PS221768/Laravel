<?php

namespace App\Http\Controllers;
use App\Http\Requests\albumRequest;
use App\Models\Album;

use Illuminate\Http\Request;

class albumController extends Controller
{

    public function index()
    {
        $albums = Album::all();

        return view('albums/Albums', ["albums" => $albums]);
    }


    public function create()
    {
        return view('albums/createAlbum');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $album = Album::find($id);
        return view('albums/Album', ['album' => $album]);
    }

    public function edit($id)
    {
        $album = Album::find($id);
        return view('albums/editAlbum', ['album' => $album]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
