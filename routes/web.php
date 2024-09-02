<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

/* Percobaan 1 Langkah 6
Route::get('/', function () {
    return '<h2>Selamat Datang<h2>';
});
*/

Route::get('/hello', function (){
    return 'Hello, World!';
});

Route::get('/world', function (){
    return 'World';
});

// Percobaan 1 Langkah 7
Route::get('/about', function () {
    return '<h1>NIM : 2241760133 <br> Nama : Rafiu Mahdaviqia<h1>';
});

/* Percobaan 1 Langkah 8
Route::get('/user/{name}', function ($name){
    return 'Nama saya '.$name;
});
*/

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId){
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id){
    return 'Halaman Artikel dengan ID : '.$id;
});

/* Percobaan 1 Langkah 14
Route::get('/user/{name?}', function ($name=null){
    return 'Nama saya '.$name;
});
*/

// Percobaan 1 Langkah 17
Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name; 
});



/* ROUTE NAME

// Hapus salah satu rute yang memiliki nama yang sama
Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile');

// Generating URLs...
$url = route('profile');

// Generating Redirects...
return redirect()->route('profile');

*/

/* ROUTE GROUP
    Route::get('/', function () { 
        // Uses first & second middleware... 
    }); 
 
Route::get('/user/profile', function () { 
        // Uses first & second middleware... 
    }); 
}); 
 
Route::domain('{account}.example.com')->group(function () { 
    Route::get('user/{id}', function ($account, $id) { 
        // 
    }); 
}); 
 
Route::middleware('auth')->group(function () { 
 Route::get('/user', [UserController::class, 'index']); 
 Route::get('/post', [PostController::class, 'index']); 
 Route::get('/event', [EventController::class, 'index']); 
  
}); 
*/

/* ROUTE PREFIXES
Route::prefix('admin')->group(function () { 
 Route::get('/user', [UserController::class, 'index']); 
 Route::get('/post', [PostController::class, 'index']); 
 Route::get('/event', [EventController::class, 'index']); 
 
}); 
*/

/* ROUTE REDIRECTS
Route::redirect('/here', '/there'); 
/*

/* VIEW ROUTES
Route::view('/welcome', 'welcome'); 
Route::view('/welcome', 'welcome', ['name' => 'Taylor']); 
*/

