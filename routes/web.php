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

Route::get('/', function () {
    return view('index');
});
Route::get('onama', function () {
    return view('onama');
});
Route::get('artist', function () {
    return view('artist');
});
Route::get('/posts/search', [App\Http\Controllers\PostsController::class, 'search'])->name('posts.search');
Route::get('/onama', [App\Http\Controllers\OnamaController::class, 'index'])->name('onama');
Route::resource('/artist', App\Http\Controllers\ArtistController::class);
Route::resource('/konsultacije', App\Http\Controllers\KonsultacijeController::class);

Route::get('slike/{artistId}', [App\Http\Controllers\SlikeController::class, 'showSlikeForArtist'])->name('slike.showSlikeForArtist');

Route::post('/store', [App\Http\Controllers\SlikeController::class, 'store'])->name('slike.store');
Route::get('/createKons', [App\Http\Controllers\KonsultacijeController::class, 'create'])->name('konsultacije.create');
Route::middleware(['auth', 'auth-custom'])->group(function () {
    Route::get('/prikazKonsultacija', [App\Http\Controllers\KonsultacijeController::class, 'index'])->name('konsultacije.prikazKonsultacija');
    Route::get('/create', [App\Http\Controllers\SlikeController::class, 'create'])->name('slike.create');
    Route::get('/indexMenadzer', [App\Http\Controllers\KonsultacijeController::class, 'indexMenadzer'])->name('konsultacije.indexMenadzer');
    Route::post('oceneAzuriraj', [App\Http\Controllers\OceneController::class, 'store'])->name('ocene.store');
    Route::get('ocene/create/{id}', [App\Http\Controllers\OceneController::class, 'create'])->name('ocene.create');
});

Route::view('/', 'index')->name('index');
Route::resource('/posts', App\Http\Controllers\PostsController::class);
Route::get('/posts', [App\Http\Controllers\PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/{slug}', [App\Http\Controllers\PostsController::class, 'show'])->name('posts.show');
Route::get('/indexMenadzer', [App\Http\Controllers\KonsultacijeController::class, 'indexMenadzer'])->name('konsultacije.indexMenadzer');

Route::get('/profil', [App\Http\Controllers\UserController::class, 'show'])->name('user.profil');
Route::get('/promenaSifre', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::post('/novaSifra', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
Route::get('/promenaSifre', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');

Route::get('/potvrdaStatusa', [App\Http\Controllers\PostsController::class, 'potvrdaStatusa'])->name('posts.potvrdaStatusa');
Route::match(['get', 'put'], '/azurirajStatus/{postId}', [App\Http\Controllers\PostsController::class, 'azurirajStatus'])->name('posts.azurirajStatus');
Route::delete('/slike/{slikaId}', [App\Http\Controllers\SlikeController::class, 'destroy'])->name('slike.destroy');
//Route::get('ocene/create/{id}', [App\Http\Controllers\OceneController::class, 'create'])->name('ocene.create');
//Route::post('oceneAzuriraj', [App\Http\Controllers\OceneController::class, 'store'])->name('ocene.store');
Route::get('ocenePrikaz', [App\Http\Controllers\OceneController::class, 'index'])->name('ocene.index');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


