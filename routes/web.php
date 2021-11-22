<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\ProductController;
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
    return view('client.home.index');
});


Route::get('/products', function () {
    return view('client.products.index');
});

Route::get('/test', function () {
    return view('admin.test');
});

Route::get('/test-admin', function () {
    return view('admin.master');
});

Route::get('/checkout', function () {
    return view('client.checkout.index');
});

Route::prefix('admin')->group(function() {

    Route::get('/', function () {
        return view('admin.dashboard.index');
    })->name('admin-home');

    Route::prefix('category')->group(function() {
        Route::get('', [CategoryController::class, 'showCategory'])->name('show-category');

        Route::get('create', [CategoryController::class, 'showCreateCategory'])->name('create-category');
        Route::post('create', [CategoryController::class, 'storeCategory']);

        Route::get('/{slug}', [CategoryController::class, 'showEditCategory'])->name('edit-category');
        Route::put('/{slug}', [CategoryController::class, 'updateCategory']); 

        Route::get('delete/{slug}', [CategoryController::class, 'deleteCategory'])->name('delete-category');

    });

    Route::prefix('product')->group(function() {
        Route::get('', [ProductController::class, 'showProduct'])->name('show-product');
        
        Route::get('create', [ProductController::class, 'showCreateProduct'])->name('create-product');
        Route::post('create', [ProductController::class, 'storeProduct']);

        Route::get('/{slug}', [ProductController::class, 'showEditProduct'])->name('edit-product');
        Route::put('/{slug}', [ProductController::class, 'updateProduct']); 

        // Route::get('delete/{id}', [CategoryController::class, 'deleteCategory'])->name('delete-category');

    });

    Route::prefix('media')->group(function() {
        Route::get('', [MediaController::class, 'index'])->name('show-media');
        
        // Route::post('/upload', [MediaController::class, 'storeMedia'])->name('upload-media');

        // Route::get('/{id}', [MediaController::class, 'showEditMedia'])->name('edit-media');

        // Route::get('create', [CategoryController::class, 'showCreateCategory'])->name('create-category');
        // Route::post('create', [CategoryController::class, 'storeCategory']);

        // Route::get('edit/{id}', [CategoryController::class, 'showEditCategory'])->name('edit-category');
        // Route::put('edit/{id}', [CategoryController::class, 'updateCategory']); 

        // Route::get('delete/{id}', [CategoryController::class, 'deleteCategory'])->name('delete-category');

    });


    // Route::get('/media2', function () {
    //     return view('admin.media.index2');
    // });
});