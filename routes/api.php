<?php

use App\Http\Controllers\API\HasilController;
use App\Http\Controllers\API\KandidatsController;
use App\Http\Controllers\API\PemilihsController;
use App\Http\Controllers\API\KodeTpsController;
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


Route::get('kandidat', [KandidatsController::class, 'all']);
Route::get('pemilih', [PemilihsController::class, 'all']);
Route::get('hasil', [HasilController::class, 'all']);
Route::get('tps', [KodeTpsController::class, 'all']);
Route::post('pemilihan', [HasilController::class, 'store']);
Route::post('voter', [PemilihsController::class, 'store']);
