<?php

use App\Http\Controllers\SzakdogaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/szakdogas', [SzakdogaController::class, 'index']);
Route::get('/szakdogas/{szakdoga_id}', [SzakdogaController::class, 'show']);
Route::post('/szakdogas', [SzakdogaController::class, 'store']);
Route::put('/szakdogas/{szakdoga_id}', [SzakdogaController::class, 'update']);
Route::delete('/szakdogas/{szakdoga_id}', [SzakdogaController::class, 'destroy']);
