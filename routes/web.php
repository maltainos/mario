<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OutcomeController;
use App\Http\Controllers\DireccaoController;
use App\Http\Controllers\TracerController;


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

Route::get('/login', [AuthController::class, 'show'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/', [HomeController::class, 'search'])->name('search');
Route::get('/search', [HomeController::class, 'search']);
Route::get('/income/new', [IncomeController::class, 'create'])->name('income');
Route::post('/income', [IncomeController::class, 'store']);
Route::get('/success', [IncomeController::class, 'success'])->name('success');
Route::fallback(function(){
    return view('not-found');
});

Route::group(['middleware' => ['auth']], function(){

    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/account', [UserController::class, 'account']);
    Route::get('/settings', [SettingController::class, 'index'])->name('settings');

    Route::controller(UserController::class)->prefix('/users')->group(function(){
        Route::get('/', 'index')->name('users');
        Route::get('/new', 'create');
        Route::post('/', 'store')->name('store');
        Route::put('/edit/{userId}', 'update');
    });


    Route::controller(FolderController::class)->prefix('/folders')->group(function(){
        Route::get('/', 'index')->name('folders');
    });

    Route::prefix('/income')->group(function(){
        Route::get('/', [IncomeController::class, 'index']);
        Route::put('/edit/{userId}', [IncomeController::class, 'update']);
    });

    Route::prefix('/outcome')->group(function(){
        Route::get('/', [OutcomeController::class, 'index']);
        Route::get('/new', [OutcomeController::class, 'create']);
        Route::post('/', [OutcomeController::class, 'store']);
        Route::put('/edit/{userId}', [OutcomeController::class, 'update']);
    });

    Route::prefix('/direccao')->group(function(){
        Route::get('/', [DireccaoController::class, 'index']);
        Route::get('/new', [DireccaoController::class, 'create']);
        Route::get('/{alias}', [DireccaoController::class, 'show']);
        Route::post('/', [DireccaoController::class, 'store']);
        Route::post('/edit/{userId}', [DireccaoController::class, 'update']);
        Route::get('/edit/{userId}', [DireccaoController::class, 'destroty']);

        Route::get('/folders/{alias}', [FolderController::class, 'show']);
    });

    Route::prefix('/files')->group(function(){
        Route::get('/{alias}', [IncomeController::class, 'show']);
        Route::get('/{alias}/send', [IncomeController::class, 'send']);
        Route::post('/{alias}/send', [TracerController::class, 'store']);
    });
});

