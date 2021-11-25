<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\OrderController;
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
})->name('home-page');


Route::get('/products', function () {
    return view('client.products.index');
})->name('product-page');

Route::get('/product/{slug}', function () {
    return view('client.products.product-detail');
});

Route::get('/contact', function () {
    return view('client.contact.index');
})->name('contact-page');



//========= Admin routes ============

Route::get('/test', function () {
    return view('admin.test');
});

Route::get('/test-admin', function () {
    return view('admin.master');
});





Route::middleware(['guest:admin'])->group(function() { 

    Route::get('/admin-register', [AuthController::class, 'showRegister'])->name('admin-register');
    Route::post('/admin-register', [AuthController::class, 'storeRegister'])->name('admin-register');
    
    
    Route::get('/admin-login', [AuthController::class, 'showLogin'])->name('admin-login');
    Route::post('/admin-login', [AuthController::class, 'login'])->name('admin-login');
    
    
});
Route::middleware(['auth:admin'])->group(function() {
    Route::get('/admin-logout', [AuthController::class, 'logout'])->name('admin-logout');
    

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
            
        });
       
    
        Route::get('/orders', [OrderController::class, 'index'])->name('show-orders');
    });
    
});