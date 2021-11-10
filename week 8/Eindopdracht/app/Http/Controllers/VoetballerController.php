<?php

namespace App\Http\Controllers;

use \App\Models\Voetballer;
use \App\Http\Requests\voetballerRequests;
use Illuminate\Http\Request;

class VoetballerController extends Controller
{
    public function index()
    {
        $voetballers = Voetballer::all();
        return view('voetballers', ['voetballers' => $voetballers]);
    }

    public function show($id)
    {
        $voetballer = Voetballer::find($id);
        return view('voetballer', ['voetballer' => $voetballer]);
    }

    public function create()
    {
        return view('createVoetballer');
    }

    public function store(voetballerRequests $request)
    {
        $voetballer = new Voetballer();
        $voetballer->FirstName = $request->FirstName;
        $voetballer->PrefixName = $request->PrefixName;
        $voetballer->LastName = $request->LastName;
        $done = $voetballer->save();
        if ($done) {
            return "voetballer has been added";
        }else{ return "an error has occurt, please try again";}
    }

    public function edit($id)
    {
        $voetballer = Voetballer::find($id);
        return view('editVoetballer', ['voetballer' => $voetballer]);
    }

    public function update(voetballerRequests $request, $id)
    {
        $voetballer = Voetballer::find($id);
        $voetballer->FirstName = $request->FirstName;
        $voetballer->PrefixName = $request->PrefixName;
        $voetballer->LastName = $request->LastName;
        $done = $voetballer->save();
        if ($done) {
            return "voetballer has been changed";
        }else{ return "an error has occurt, please try again";}

    }
    
    public function destroy($id){
        $done = Voetballer::destroy($id);
        if ($done) {
            return "voetballer has been deleted";
        }else{ return "an error has occurt, please try again";}
    }
}
