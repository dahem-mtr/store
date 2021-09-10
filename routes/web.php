<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dash\DashController;
use App\Http\Controllers\Dash\LoginController;
use App\Http\Controllers\Dash\UserController;

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
    return view('welcome');
});
Route::get('/lang/{lang}', [DashController::class, 'change_lang'])->name('lang');


Route::group(['middleware' => 'lang'], function () {
    
Route::get('/login', function () {
    return view('dash.login');
})->name('login');


Route::post('/log', [LoginController::class, 'authenticate'])->name('authenticate');



Route::middleware(['auth','role'])->group(function () {
    Route::prefix('admin')->group(function () {


        Route::get('/', [DashController::class, 'index'])->name('admin');
        Route::get('users', [UserController::class, 'index'])->name('users.index');
        // Route::resource('users', UserController::class);
            
    
        
    }); // admin route
}); // auth middleware

}); // lang middleware
   