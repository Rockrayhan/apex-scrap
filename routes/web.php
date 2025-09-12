<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;





//====== frontend routes =======

Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'zh'])) abort(404);
    session(['locale' => $locale]);
    return back();
})->name('lang.switch');


Route::get('/', [FrontendController::class, 'home'])->name('home');

Route::get('/about', [FrontendController::class, 'about'])->name('about');

Route::get('/categories/{id}', [FrontendController::class, 'categoryDetailsPage'])->name('categories.show');




Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');







// // routes/web.php
// Route::get('/test-translation', function () {
//     $blog = App\Models\Blog::first();

//     // Test accessors
//     dd([
//         'current_locale' => app()->getLocale(),
//         'title_en' => $blog->title_en,
//         'title_zh' => $blog->title_zh,
//         'title_accessor' => $blog->title,
//         'description_accessor' => $blog->description
//     ]);
// });



Route::get('/api-list', function () {
    return view('api-list');
})->name('api-lists');


// blogs
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
Route::get('/blogs/edit/{id}', [BlogController::class, 'edit'])->name('blogs.edit');
Route::post('/blogs/update/{id}', [BlogController::class, 'update'])->name('blogs.update');
Route::get('/blogs/delete/{id}', [BlogController::class, 'destroy'])->name('blogs.delete');



// admin 
Route::get('/admin', [AdminAuthController::class, 'dashboard'])->name('dashboard')->middleware('admin');

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('/admin/change-password', [AdminAuthController::class, 'showChangePasswordForm'])->name('admin.change.password.form');
Route::post('/admin/change-password', [AdminAuthController::class, 'changePassword'])->name('admin.change.password');



Route::prefix('admin')->name('admin.')->group(function () {

    // Categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('/categories/{id}/update', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');



    // Products
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('/products/{id}/update', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});
