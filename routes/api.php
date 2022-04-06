<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/en/API/BoxOfficeAllTime/k_wuq6ox8s',[\App\Http\Controllers\WrapperApiController::class,'boxofficealltime'])->name('boxofficealltime')
    ->middleware(\App\Http\middleware\Npm::class)
    ->name('npm');
Route::get('/en/API/UserRatings/k_wuq6ox8s/tt1375666',[\App\Http\Controllers\WrapperApiController::class,'userratings'])->name('userratings')
    ->middleware(\App\Http\middleware\Npm::class)
    ->name('npm');
Route::get('/en/API/MostPopularMovies/k_wuq6ox8s',[\App\Http\Controllers\WrapperApiController::class,'mostpopularmovies'])->name('mostpopularmovies')
    ->middleware(\App\Http\middleware\Npm::class)
    ->name('npm');
Route::get('/en/API/YouTubeTrailer/k_wuq6ox8s/tt1375666',[\App\Http\Controllers\WrapperApiController::class,'youtubetrailer'])->name('youtubetrailer')
    ->middleware(\App\Http\middleware\Npm::class)
    ->name('npm');

Route::get('/user/identitas', function (){
    return [
        'code' => '0',
        'data' => [
            'npm'=>'197006012',
            'nama'=>'Fahmi Rizky Fauzi',
            'email'=>'197006012@student.unsil.ac.id'
        ]
    ];
})->middleware(\App\Http\middleware\Npm::class)
    ->name('npm');
