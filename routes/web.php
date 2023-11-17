<?php

use App\Http\Controllers\allProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');

//bike page
Route::get('/bikes', [App\Http\Controllers\BikeController::class, 'index']);

Route::post('/add-to-session', [App\Http\Controllers\BikeController::class, 'addToSession'])->name('addToSession');
Route::get('/selected-bikes', [App\Http\Controllers\BikeController::class, 'showSelectedBikes']);
Route::delete('/remove-from-session', [App\Http\Controllers\BikeController::class, 'removeFromSession'])->name('removeFromSession');

//cart page
//Route::get('/cart', [App\Http\Controllers\CartController::class, 'showCart'])->name('cart.page');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::delete('/cart/remove/{index}', [CartController::class, 'removeFromCart'])->name('cart.remove');

require __DIR__.'/auth.php';

Route::get('/allbikes', [allProductController::class, 'bikes']);
//Route::get('/filter-bikes/{category2}', 'allProductController@filterBikes');
Route::get('/filter-bikes/{category2}', [allProductController::class, 'filterBikes']);

Route::get('/scooters', [allProductController::class, 'scooters']);
Route::get('/apparels', [allProductController::class, 'apparels']);
Route::get('/parts', [allProductController::class, 'parts']);

Route::get('/service', [ServiceController::class, 'showServiceForm'])->name('service.form');
Route::post('/service/book', [ServiceController::class, 'bookService'])->name('service.book');
Route::get('/service/bookings', [ServiceController::class, 'viewBookings'])->name('service.bookings');

