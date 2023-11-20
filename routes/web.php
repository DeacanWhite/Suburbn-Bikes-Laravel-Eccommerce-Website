<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\rosterController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', function () {
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

require __DIR__.'/auth.php';

Route::get('/', [ProductController::class, 'home'])->name('home.index');

//routes for map page
Route::get('/location', function () {
    return view('map');
});

//routes for cart
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{prodNo}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

//routes for product pages
Route::get('/bikes', [ProductController::class, 'bikes']);
Route::get('/filter-bikes/{category2}', [ProductController::class, 'filterBikes']);
Route::get('/scooters', [ProductController::class, 'scooters']);
Route::get('/apparels', [ProductController::class, 'apparels']);
Route::get('/parts', [ProductController::class, 'parts']);

//routes for service pages
Route::get('/services', [ServiceController::class, 'showServiceForm'])->name('service.form');
Route::post('/service/book', [ServiceController::class, 'bookService'])->name('service.book');

// Routes accessible to staff and manager
Route::middleware(['role:staff,manager'])->group(function () {
    Route::get('/roster/view', [rosterController::class, 'viewroster'])->name('roster.view');
    Route::get('/service/bookings', [ServiceController::class, 'viewBookings'])->name('service.bookings');
});

// Routes accessible only to manager
Route::middleware(['role:manager'])->group(function () {
    // Accessible to manager
    Route::get('/roster', [rosterController::class, 'showrosterForm'])->name('roster.form');
    Route::post('/roster/set', [rosterController::class, 'setroster'])->name('roster.set');
    Route::delete('/roster/{id}', [rosterController::class, 'destroy'])->name('roster.destroy');
});

Route::get('/test', [ProductController::class, 'test']);

//Route for error pages
Route::view('/unauthorized', 'errors.unauthorized')->name('error.unauthorized');

//auth
//Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
//Route::post('login', [AuthController::class, 'login']);
//Route::post('logout', [AuthController::class, 'logout'])->name('logout');
