<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('index');
});

// auth route for all
Route::group(['middleware'=>['auth']],function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
});

//for Admin
Route::group(['middleware'=>['auth','role:admin']],function(){
    Route::get('/dashboard/postcreate',[DashboardController::class,'postcreate'])->name('dashboard.postcreate');
});

//for student
Route::group(['middleware'=>['auth','role:student']],function(){
    Route::get('/dashboard/myprofile',[DashboardController::class,'myprofile'])->name('dashboard.myprofile');
});

require __DIR__.'/auth.php';
