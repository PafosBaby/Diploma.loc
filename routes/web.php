<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


Route::get('change-locale/{locale}', [AppController::class, 'changeLocale'])->name('app.change-locale');


Route::middleware(['locale'])->group(function (){
    Route::get('/', [AppController::class, 'homePage']);
    Route::get('blog/{categorySlug}', [AppController::class, 'blogPage'])->name('app.blog.category');
    Route::get('blog/{categorySlug}/{articleSlug}', [AppController::class , 'articlePage'])->name('app.blog.article');
    Route::post('blog/{article}/add-coment', [CommentController::class, 'store'])->name('app.article.add-comment');


    Route::middleware(['guest'])->group(function(){
        Route::get('register', [AuthController::class, 'registerPage'])->name("register");
        Route::post('register', [AuthController::class, 'register'])->name("register.store");
        Route::get('login', [AuthController::class, 'loginPage'])->name("login");
        Route::post('login', [AuthController::class, 'login'])->name("login.auth");
    });




    Route::prefix('admin')->middleware('auth')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin');
        Route::resource('categories', CategoryController::class);
        Route::resource('articles', ArticleController::class);
        Route::resource('tags', TagController::class);
        Route::get('articles/{article}/remove-image', [ArticleController::class, 'removeImage'])->name('admin.articles.remove-image');
    });
});

