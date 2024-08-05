<?php

use App\Http\Controllers\ProfileController;
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


// Route::get('/', 'App\Http\Controllers\Pagescontroller@index');
// Route::get('/caurosel', 'App\Http\Controllers\cauroselsController@index');
// Route::get('/ourstories', 'App\Http\Controllers\Pagescontroller@ourstories');
// Route::get('/recipes', 'App\Http\Controllers\Pagescontroller@recipes');
// Route::get('/blogs', 'App\Http\Controllers\Pagescontroller@blogs');
// Route::get('/blogs/blogsCreate', 'App\Http\Controllers\Pagescontroller@blogsCreate');
// Route::post('/blogs', 'App\Http\Controllers\Pagescontroller@blogsInsert');
// Route::get('/blogs/{blogData}', 'App\Http\Controllers\Pagescontroller@show');
// Route::get('/blogs/{blogData}/edit', 'App\Http\Controllers\Pagescontroller@edit');
// Route::patch('/blogs/{blogData}', 'App\Http\Controllers\Pagescontroller@update');
// Route::delete('/blogs/{blogData}', 'App\Http\Controllers\Pagescontroller@delete');
// Route::get('/blogs', 'App\Http\Controllers\Pagescontroller@blogs');


use App\Http\Controllers\Pagescontroller;
use App\Http\Controllers\cauroselsController;

// Home route
Route::get('/', [Pagescontroller::class, 'index']);

// Carousel route
Route::get('/caurosel', [cauroselsController::class, 'index']);

// Static pages
Route::get('/ourstories', [Pagescontroller::class, 'ourstories']);
Route::get('/recipes', [Pagescontroller::class, 'recipes']);

// Blog routes
Route::get('/blogs', [Pagescontroller::class, 'blogs']);
Route::get('/blogs/blogsCreate', [Pagescontroller::class, 'blogsCreate']);
Route::post('/blogs', [Pagescontroller::class, 'blogupload']);
Route::get('/blogs/{blogData}', [Pagescontroller::class, 'show']);
Route::get('/blogs/{blogData}/edit', [Pagescontroller::class, 'edit']);
Route::patch('/blogs/{blogData}', [Pagescontroller::class, 'update']);
Route::delete('/blogs/{blogData}', [Pagescontroller::class, 'delete']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/blogs', 'App\Http\Controllers\Pagescontroller@blogs');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
