<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    return view('loggin');
});

Route::get('/home', function () {
    return view('home');
});


    /* about us */
    Route::get('/over_ons', function () {
        return view('about_us');
    });

        Route::get('/over_ons/contacten', function () {
            return view('contact');
        });

    /* subjects */
    Route::get('/vakken', function () {
        $subjects = ['rekenen', 'engels', 'nederlands', 'programeren'];

        return view('subjects', ["subjects" => $subjects]);
    });

        Route::get('/vakken/cijfers/{id}', function ($id) {
            $random;
            for ($i=0; $i < 10 ; $i++) { 
                $random[$i] = rand(1, 10);
            }
            
            return view('grades', ["vak" => $id, "randoms" => $random]);
        });

        Route::get('/vakken/huiswerk/{id}', function ($id) {
            
            $huiswerk = [
                "rekenen" => [["opdracht 1", "18-09-2021"], ["opdracht 2", "19-09-2021"], ["opdracht 3", "20-09-2021"]],
                "engels" => [["opdracht 1", "21-09-2021"], ["opdracht 2", "22-09-2021"], ["opdracht 3", "23-09-2021"]],
                "nederlands" => [["opdracht 1", "24-09-2021"], ["opdracht 2", "25-09-2021"], ["opdracht 3", "26-09-2021"]],
                "programeren" => [["opdracht 1", "27-09-2021"], ["opdracht 2", "28-09-2021"], ["opdracht 3", "29-09-2021"]]
            ];

            return view('homework', ["opdrachten" => $huiswerk[$id]]);
        });

    /* schedule */
    Route::get('/rooster', function () {

        $huiswerk = [
            "rekenen" => [["opdracht 1", "18-09-2021"], ["opdracht 2", "19-09-2021"], ["opdracht 3", "20-09-2021"]],
            "engels" => [["opdracht 1", "21-09-2021"], ["opdracht 2", "22-09-2021"], ["opdracht 3", "23-09-2021"]],
            "nederlands" => [["opdracht 1", "24-09-2021"], ["opdracht 2", "25-09-2021"], ["opdracht 3", "26-09-2021"]],
            "programeren" => [["opdracht 1", "27-09-2021"], ["opdracht 2", "28-09-2021"], ["opdracht 3", "29-09-2021"]]
        ];

        return view('schedule', ["opdrachten" => $huiswerk]);
    });