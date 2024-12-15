<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('change-locale/{locale}', [AppController::class, 'changeLocale'])->name('app.change-locale');


Route::middleware(['locale'])->group(function (){
    Route::get('/', [AppController::class, 'homePage'])->name('app.home');
    Route::get('blog/{categorySlug}', [AppController::class, 'blogPage'])->name('app.blog.category');
    Route::get('blog/{categorySlug}/{articleSlug}', [AppController::class , 'articlePage'])->name('app.blog.article');
    Route::post('blog/{article}/add-coment', [CommentController::class, 'store'])->name('app.article.add-comment');
    Route::get('catalog', [AppController::class, 'catalogPage'])->name('app.catalog');
    Route::get('catalog/{product}', [AppController::class, 'productPage'])->name('app.product');


    Route::middleware(['guest'])->group(function(){
        Route::get('register', [AuthController::class, 'registerPage'])->name("register");
        Route::post('register', [AuthController::class, 'register'])->name("register.store");
        Route::get('login', [AuthController::class, 'loginPage'])->name("login");
        Route::post('login', [AuthController::class, 'login'])->name("login.auth");
    });
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('admin')->middleware('auth', 'is_ban', 'role:admin|author|manager')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin');
        Route::resource('categories', CategoryController::class)->middleware(['permission:view categories|create categories|edit categories|delete categories']);
        Route::resource('articles', ArticleController::class)->middleware(['role:admin|author|manager']);
        Route::put('articles/{article}/change-active', [ArticleController::class, 'publish'])->name('admin.articles.change-publish');
        Route::resource('tags', TagController::class)->middleware(['role:admin|author|manager']);
        Route::get('articles/{article}/remove-image', [ArticleController::class, 'removeImage'])->name('admin.articles.remove-image');
        Route::resource('products', ProductController::class);

        Route::prefix('roles')->middleware(['role:admin'])->group(function(){
            Route::get('/', [RolePermissionController::class, 'rolesPage'])->name('admin.roles');
            Route::get('create', [RolePermissionController::class, 'roleForm'])->name('admin.roles.create');
            Route::post('create', [RolePermissionController::class, 'storeRole'])->name('admin.roles.store');
            Route::get('{role}/edit', [RolePermissionController::class, 'editRole'])->name('admin.roles.edit');
            Route::put('{role}/edit', [RolePermissionController::class, 'updateRole'])->name('admin.roles.update');
        });

        Route::prefix('permissions')->middleware(['role:admin'])->group(function(){
        Route::get('/', [RolePermissionController::class, 'permissionsPage'])->name('admin.permissions');
        Route::get('create', [RolePermissionController::class, 'permissionForm'])->name('admin.permissions.create');
        Route::post('create', [RolePermissionController::class, 'storePermission'])->name('admin.permissions.store');
        });

        Route::prefix('users')->middleware(['role:admin|manager'])->group(function(){
            Route::get('/', [UserController::class, 'usersPage'])->name('admin.users');
            Route::get('{user}/edit', [UserController::class, 'editPage'])->name('admin.users.edit');
            Route::put('{user}/edit', [UserController::class, 'update'])->name('admin.users.update');
        });
    });
});

Route::get('cart', [CartController::class, 'cartPage'])->name('cart');
Route::get('cart/{product}/add', [CartController::class, 'addToCart'])->name('cart.add-product');
Route::delete('cart/{cart}', [CartController::class, 'removeItem'])->name('cart.delete');
Route::get('ckeckout', [OrderController::class, 'checkoutPage'])->name('checkout');
Route::post('send-mail', [OrderController::class, 'sendOrder'])->name('order.send-mail');
