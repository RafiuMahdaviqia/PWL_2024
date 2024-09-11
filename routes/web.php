<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;

use function PHPUnit\Framework\isNull;

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


// PERCOBAAN 2 Langkah 4
Route::get('/hello', [WelcomeController::class,'hello']); 

// PERCOBAAN 2 Langkah 6
Route::get('/hi', [PageController::class,'hi']); 
Route::get('/about', [PageController::class,'about']); 
Route::get('/articles/{id}', [PageController::class,'articles']);

// PERCOBAAN 2 Langkah 9
Route::resource('photos', PhotoController::class); 

// PERCOBAAN 2 Langkah 11
/*
Route::resource('photos', PhotoController::class)->only(['index', 'show']); 
Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);*/

/*
// PERCOBAAN 3 Langkah 2, 6
Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Andi']); 
});
*/

// PERCOBAAN 3 Langkah 9
Route::get('/greeting', [WelcomeController::class,'greeting']);
