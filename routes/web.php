<?php

use App\Http\Controllers\ArmadaBisController;
use App\Http\Controllers\KelasBisController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\RuteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/rute', [RuteController::class, 'store']);
Route::get('/rute', [RuteController::class, 'index']);
Route::get('/rute/{id}', [RuteController::class, 'show']);
Route::patch('/rute/{id}', [RuteController::class, 'update']);
Route::delete('/rute/{id}', [RuteController::class, 'destroy']);

Route::post('/kelasbis', [KelasBisController::class, 'store']);
Route::get('/kelasbis', [KelasBisController::class, 'index']);
Route::get('/kelasbis/{id}', [KelasBisController::class, 'show']);
Route::patch('/kelasbis/{id}', [KelasBisController::class, 'update']);
Route::delete('/kelasbis/{id}', [KelasBisController::class, 'destroy']);

Route::post('/armadabis', [ArmadaBisController::class, 'store']);
Route::get('/armadabis', [ArmadaBisController::class, 'index']);
Route::get('/armadabis/{id}', [ArmadaBisController::class, 'show']);
Route::patch('/armadabis/{id}', [ArmadaBisController::class, 'update']);
Route::delete('/armadabis/{id}', [ArmadaBisController::class, 'destroy']);

Route::post('/pesanan', [PesananController::class, 'store']);
Route::get('/pesanan', [PesananController::class, 'index']);
Route::get('/pesanan/{id}', [PesananController::class, 'show']);
Route::patch('/pesanan/{id}', [PesananController::class, 'update']);
Route::delete('/pesanan/{id}', [PesananController::class, 'destroy']);
