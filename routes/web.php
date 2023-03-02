<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InfoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PortfolioController::class,'index'])->name('home');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


    Route::get('/add-info',[InfoController::class,'addInfo'])->name('add.info');
    Route::get('/manage-info',[InfoController::class,'manageInfo'])->name('manage.info');
    Route::post('/new-info',[InfoController::class,'saveInfo'])->name('new.info');
    Route::get('/edit-info/{id}',[InfoController::class,'editInfo'])->name('edit.info');
    Route::get('/status/{id}',[InfoController::class,'status'])->name('status');
    Route::post('/update-info',[InfoController::class,'updateInfo'])->name('update.info');
    Route::post('/delete',[InfoController::class,'delete'])->name('delete');

});
