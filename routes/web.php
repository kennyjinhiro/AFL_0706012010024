<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieReviewController;
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
    return view('home');
});

// Route::get('/movies_create', function () {
//     return view('moviescreate');
// });

// Route::get('/moviereviewscreate', function () {
//     return view('moviereviewscreate');
// });

// Route::get('/movies_detail', function () {
//     return view('moviesdetail');
// });

// Route::get('/movies', function () {
//     return view('movies');
// });

Route::resource('movies', MovieController::class);
Route::resource('moviereviews', MovieReviewController::class);

// Route::get('/', [HomeController::class, 'home']);
//     // return view('home',['title'=>'HOME', 'page_title'=>'Welcome HOME']);

// Route::get('/contact', [ContactController::class, 'contact']);
// //Kalau statik panggil pakai ::, kalau enggak panggil pakai panah
// // Route::get('/project', [ProjectController::class, 'project']);
// Route::resource('projects', ProjectController::class);
