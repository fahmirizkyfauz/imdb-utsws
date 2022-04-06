<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperApiController extends Controller
{
    public function boxofficealltime(){
        $json = Http::get('https://imdb-api.com/en/API/BoxOfficeAllTime/k_wuq6ox8s')->json();
        return response()->json($json);
    }

    public function userratings(){
        $json = Http::get('https://imdb-api.com/en/API/UserRatings/k_wuq6ox8s/tt1375666')->json();
        return response()->json($json);
    }

    public function mostpopularmovies(){
        $json = Http::get('https://imdb-api.com/en/API/MostPopularMovies/k_wuq6ox8s')->json();
        return response()->json($json);
    }

    public function youtubetrailer(){
        $json = Http::get('https://imdb-api.com/en/API/YouTubeTrailer/k_wuq6ox8s/tt1375666')->json();
        return response()->json($json);
    }
    public function wikipedia(){
        $json = Http::get('https://imdb-api.com/en/API/Wikipedia/k_wuq6ox8s/tt1375666')->json();
        return response()->json($json);
    }
}
