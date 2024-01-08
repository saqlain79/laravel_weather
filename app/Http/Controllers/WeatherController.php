<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    function index(Request $request)
    {
    // $location = "Dhaka";
    $longitude = "91.83";
    $latitude = "22.37";
    $days = "5";
    $key = "acf3b253a79105d5a1bb4a1163f23b4b";
    $units = "metric";
    
    
    $response = Http::get("https://api.openweathermap.org/data/2.5/weather?lat={$latitude}&lon={$longitude}&appid={$key}&units={$units}");
    
    $responsefuture = Http::get("https://api.openweathermap.org/data/2.5/forecast?lat={$latitude}&lon={$longitude}&cnt={$days}&appid={$key}&units={$units}");

    dump($responsefuture->json());

    return view('index', [
        'current' => $response->json(),
        'future' => $responsefuture->json(),
    ]);
    }

}
