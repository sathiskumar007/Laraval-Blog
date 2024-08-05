<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/ourstories', function () {
//     return view('ourstories');
// });
// Route::get('/recipes', function () {
//     return view('recipes');
// });
// Route::get('/nav', function () {
//     return view('nav');
// });
// Route::get('/blogs', function () {
//     return view('blogs');
// });

Route::get('/index','App\Http\Controllers\Pagescontroller@index');
Route::get('/ourstories','App\Http\Controllers\Pagescontroller@ourstories');
Route::get('/recipes','App\Http\Controllers\Pagescontroller@recipes');
Route::get('/blogs','App\Http\Controllers\Pagescontroller@blogs');
Route::get('/blogsCreate','App\Http\Controllers\Pagescontroller@blogsCreate');
Route::post('/blogs','App\Http\Controllers\Pagescontroller@blogCreate');
Route::get('/blogs/{blogData}','App\Http\Controllers\Pagescontroller@show');
Route::get('/blogs/{blogData}/edit','App\Http\Controllers\Pagescontroller@edit');
Route::patch('/blogs/{blogData}','App\Http\Controllers\Pagescontroller@update');
Route::delete('/blogs/{blogData}','App\Http\Controllers\Pagescontroller@delete');
