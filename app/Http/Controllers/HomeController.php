<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $summary = Cache::remember('currentDeaths::us', 300, function () {
            return collect(Http::get('https://api.covid19api.com/summary')->json()['Countries']);
        });

        $usa = $summary->where('CountryCode', 'US')->first();

        $currentDeaths = $usa['TotalDeaths'];
        $place = Place::where('population', '<=', $currentDeaths)->orderByDesc('population')->first();

        return view('welcome', [
            'place' => $place,
            'currentDeaths' => $currentDeaths,
        ]);
    }
}
