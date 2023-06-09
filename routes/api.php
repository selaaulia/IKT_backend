<?php

use App\Http\Controllers\DPMController;
use App\Http\Controllers\DPMInputController;
use App\Http\Controllers\DPMResultController;
use App\Http\Controllers\DTMController;
use App\Http\Controllers\DTMInputController;
use App\Http\Controllers\DTMResultController;
use App\Http\Controllers\PengujiController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\TransformatorController;
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
Route::apiResource('import-dpm', DPMController::class);
Route::apiResource('import-dtm', DTMController::class);
Route::apiResource('penguji', PengujiController::class);
Route::apiResource('transformator', TransformatorController::class);
Route::apiResource('input-dtm', DTMInputController::class);
Route::apiResource('input-dpm', DPMInputController::class);
Route::apiResource('result-dtm', DTMResultController::class);
Route::apiResource('result-dpm', DPMResultController::class);
Route::apiResource('results', ResultController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});