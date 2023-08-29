<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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
})->middleware('auth');


Route::get('/login',[LoginController::class,'index'])->name('login'); 
Route::post('/login-proses',[LoginController::class,'login_proses'])->name('login_proses'); 
Route::get('/logout',[LoginController::class,'logout'])->name('logout'); 

// Route::group(['prefix'=> 'admin','middleware'=>['auth'], 'as'=>'admin'], function(){
// Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard')->middleware('auth');
// Route::get('/bali', function () {
//     return view('auth.bali');
// }); 

Route::group(['middleware'=>['auth']], function(){
    Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');
    Route::get('/bali', function () {
    return view('auth.bali');
    });     
});
// });


