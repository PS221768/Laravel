<?php

namespace App\Http\Controllers;

use App\Http\Requests\carRequests;
use Illuminate\Http\Request;
use \App\Models\Car;
class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars', ['cars' => $cars]);
    }

    public function show($id)
    {
        $car = Car::find($id);
        return view('car', ['car' => $car]);
    }

    public function createview()
    {
        return view('createCar');
    }

    public function create()
    {
        $car = new Car();
        $car->merk=request('merk');
        $car->type=request('type');
        $car->bouwjaar=request('bouwjaar');
        $done = $car->save();
        var_dump($car);
        if ($done) {
            return "car has been added";
        }else{ return "an error has occurt, please try again";}
    }

    public function editview($id)
    {
        $car = Car::find($id);
        return view('editCar', ['car' => $car]);
    }

    public function edit(carRequests $request, $id)
    {
        $car = Car::find($id);
        $car->merk = $request->merk;
        $car->type = $request->type;
        $car->bouwjaar = $request->bouwjaar;
        $done = $car->save();
        if ($done) {
            return "car has been changed";
        }else{ return "an error has occurt, please try again";}

    }
    
    public function delete($id){
        $done = Car::destroy($id);
        if ($done) {
            return "car has been deleted";
        }else{ return "an error has occurt, please try again";}
    }
    
}
