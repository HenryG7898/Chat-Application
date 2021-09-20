<?php

use App\Http\Controllers\Friend;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::view('chat','users.messages');

route::view('profile','users.profile');

route::view('search','users.search');

route::get('addfriend', function (){
    return view('addfriend');
});


route::post('addFriends',[Friend::class,'addFriends']);
route::post('search',[Friend::class,'search'])->name('users.search');
