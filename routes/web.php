<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
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
    // dd(Session::get('token'));
    return view('member-ho.menu.member');
});
Route::get('/member/data', function () {
    // dd(Session::get('token'));
    return view('member-ho.menu.member');
});
Route::get('/member/sms', function () {
    // dd(Session::get('token'));
    return view('member-ho.menu.sms');
});
//LOGIN
Route::post('/login', [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/member/list', [MemberController::class, 'index']);

Route::middleware(['mylogin'])->group(function () {
    //HOME
    Route::get('home', [HomeController::class, 'index']);
    Route::post('get-user', [HomeController::class, 'getUser']);
    Route::post('insert-user', [HomeController::class, 'insertUser']);
    
});
