<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticlesController;
use App\Models\Article;

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

// Route::get('/posts/{post}', [PostsController::class, 'view']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

      return view('/about', [
          'articles' => Article::take(3)->latest()->get()
      ]);

});


Route::resource('/articles', ArticlesController::class);







