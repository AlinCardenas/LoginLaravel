<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
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



Route::prefix('users')->group(function()
{
    Route::controller(AuthController::class)->group(function(){

        Route::get('users/login','login')->name('login');
        Route::get('register','register')->name('register');

        Route::post('login-verify', 'loginVerify')->name('login.verify');
        Route::post('register-verify', 'registerVerify')->name('register.verify');
        
        Route::post('logout', 'logout')->name('logout');
    });
    
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
});
