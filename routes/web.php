<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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
    return view('index', ['products' => Product::all()->take(4), 'posts' => Post::all()->take(4)]);
});

Route::get('/shop', function () {
    return view('client.shop', ['products' => Product::all()->sortDesc()]);
});

Route::get('/blog', function () {
    return view('client.blog', ['posts' => Post::all()->sortDesc()]);
});

Route::get('blog/post/{id}', [PostController::class, 'show'])->name('show-post');
Route::get('store/product/{id}', [ProductController::class, 'show'])->name('product');
                                    
Route::post('commets/new', [CommentController::class, 'store'])->middleware('auth')->name('new-comment');

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', function(){
        return view('dashboard');
    })->name('admin');
    Route::resource('posts', PostController::class);
    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('comments', CommentController::class);
});

require __DIR__.'/auth.php';
