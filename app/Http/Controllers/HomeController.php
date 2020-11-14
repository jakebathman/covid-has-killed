<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $currentDeaths = $this->getCurrentDeaths();
        $place = Place::where('population', '<=', $currentDeaths)->orderByDesc('population')->first();

        return view('welcome', [
            'place' => $place,
            'currentDeaths' => $currentDeaths,
        ]);
    }

    protected function getCurrentDeaths()
    {
        $url = 'https://jhucoronavirus.azureedge.net/jhucoronavirus/homepage-featured-stats.json';

        return Cache::remember('currentDeaths::us::jhu', 600, function () use ($url) {
            return Arr::get(Http::get($url)->json(), 'deaths.US');
        });
    }
}
