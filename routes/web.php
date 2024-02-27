<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;

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
// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);


Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::get('/world', function () {
    return 'World';
});

// Route::get('/about', function () {
//     return '2141762143 / Bangkit Maulana Caniago';
// });

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID ' . $id;
// });

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Bangkit']);
});

Route::get('/greeting', [WelcomeController::class,
'greeting']);
    
    // Route::get('/hello', function () {
        //     $hello = "Hello World";
        //     var_dump($hello);
        //     die();
        //     return 'Hello World';
        // });
        // Route::get('/mahasiswa', function () {
        //     $arrMahasiswa = ["Ferly", "Bangkit", "Risqi", "Hendra"];
        //     return view('politeknik.mahasiswa', ['mahasiswa' => $arrMahasiswa]);
        // });
        
        // Route::get('/dosen', function () {
        //     $arrDosen = ["Pak Zawarudin", "Pak Usman", "Bu Meyti", "Bu Wilda"];
        //     return view('politeknik.dosen', ['dosen' => $arrDosen]);
        // });
        
        // Route::get('helo', function () {
        //     $hello = ['Hello World', 2 => ['Hello Jakarta', 'Hello Meda']];
        //     dd($hello);
        //     return $hello;
        // });