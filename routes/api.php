<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DireccaoController;
use App\Http\Controllers\FolderController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//Route::post('/folders', [FolderController::class, 'store']);
Route::controller(FolderController::class)->prefix('/folders')->group(function(){
    Route::post('/', 'store');
});

//Route::post('/folders', [FolderController::class, 'store']);
Route::controller(DireccaoController::class)->prefix('/departments/{alias}')->group(function(){
    Route::get('/', 'showApi');
});
