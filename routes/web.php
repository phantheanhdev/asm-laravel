<?php

use App\Http\Controllers\BillController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

// product
Route::get('/product_details/{id}', [ProductController::class, 'product_details']);
Route::get('/single_product/{id}', [ProductController::class, 'single_product']);

// cart
Route::get('/cart', [CartController::class, 'cart']);
Route::post('/add_cart', [CartController::class, 'add_cart']);
Route::get('/delete_all_cart', [CartController::class, 'delete_all_cart']);
Route::get('/delete_one_cart/{id}', [CartController::class, 'delete_one_cart']);

Route::get('/check_out', [CartController::class, 'check_out']);
Route::post('/save_bill', [CartController::class, 'save_bill']);
Route::get('/payment_success', [CartController::class, 'payment_success']);


//  ================================= admin ==================================
Route::middleware('auth')->group(function () {
    Route::resource('/product', ProductController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/bill', BillController::class);
});


// ================================ breeze ===================================
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
