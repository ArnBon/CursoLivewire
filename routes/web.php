<?php

use App\Http\Livewire\Articles;
use App\Http\Livewire\ArticleForm;
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

Route::get('/', Articles::class)->name('articles.index');
Route::get('/blog/crear', ArticleForm::class)->name('articles.create');