<?php

namespace App\Http\Controllers;
use App\Http\Requests\BandRequest as songsRequest;
use App\Models\Band;

use Illuminate\Http\Request;

class Bandscontroller extends Controller
{
    public function index()
    {
        $bands = Band::all();
        return view('bands/bands', ['bands' => $bands]);
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
        $band = new Band();
        $band->name = $request->name;
        $band->founded = $request->founded;
        $band->active_till = $request->active_till;
        $done = $band->save();
        if ($done) {
            return "band has been created";
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
        $band = Band::find($id);
        return view('bands/band', ['band' => $band]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $band = Band::find($id);
        return view('songs/editBands', ['band' => $band]);

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
        $band = Band::find($id);
        $band->title = $request->title;
        $band->singer = $request->singer;
        $done = $band->save();
        if ($done) {
            return "band has been changed";
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
        $band = Band::find($id); 
        $done = $band->delete();
        if ($done) {
            return "band has been deleted";
        }else{ return "an error has occurt, please try again";}
    }
}
