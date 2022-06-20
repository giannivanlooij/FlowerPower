<?php
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Components\Products\Products;
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




Route::get('/producten', [Products::class, 'mount']);



Route::get('/', function () {
    return view('components/home');
});

Route::get('/login', function () {
    return view('components/login');
});

Route::group(['prefix' => 'artikel', 'as' => 'article.'], function () {
    
    Route::get('/allproducts', [Products::class, 'products'])->name('products');

});

// routes for cart
Route::get('/productlijst', [ProductController::class, 'productList'])->name('products.list');
Route::get('/cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clearAllCart'])->name('cart.clear');