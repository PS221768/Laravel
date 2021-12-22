<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Http\Requests\songsRequest;
use App\Models\Song;

use PDO;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all();
        return view('songs/songs', ['songs' => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createview()
    {
        return view('createSong');
    }

    public function create(songsRequest $request)
    {
        $song = new Song();
        $song->title = $request->title;
        $song->singer = $request->singer;
        $done = $song->save();
        if ($done) {
            return "song has been created";
        }else{ return "an error has occurt, please try again";}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $song = Song::find($id);
        return view('songs/song', ['song' => $song]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $song = Song::find($id);
        return view('songs/editSong', ['song' => $song]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(songsRequest $request, $id)
    {
        $song = Song::find($id);
        $song->title = $request->title;
        $song->singer = $request->singer;
        $done = $song->save();
        if ($done) {
            return "song has been changed";
        }else{ return "an error has occurt, please try again";}

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $song = Song::find($id); 
        $done = $song->delete();
        if ($done) {
            return "song has been deleted";
        }else{ return "an error has occurt, please try again";}
    }
}
