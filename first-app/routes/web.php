<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HelloController;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});

// MENULISKAN ROUTE DENGAN CARA PERTAMA
// Route::get('hello', function () {
    
//     // $ping = ['ping' => "pong"];
//     // return $ping;

//     // kenapa menggunakan return karena return akan mengembalikan nilai ke client maybe?
//     // return demenetric menghentikan sintaks selanjutnya, tidak akan menjalankan sintaks selanjutnya 
//     return view('hello');
// });


// MENULISKAN ROUTE CONTROLLER 1
// Route::get('hello', 'App\Http\Controllers\HelloController@index');

// MENULISKAN ROUTE CONTROLLER 2
// Route::get('hello', [HelloController::class, 'index']);


// MENULISKAN ROUTE DENGAN CARA KEDUA
// Route::get('world', [HelloController::class, 'world_message']);


// Route::resource('posts', PostController::class);

Route::get('posts', [PostController::class, 'index']);