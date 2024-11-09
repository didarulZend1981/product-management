<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


Route::get('/', [ProductController::class, 'index'])->name('products.index'); // List all products
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create'); // Show form to create a new product
Route::post('/products', [ProductController::class, 'store'])->name('products.store'); // Store a new product
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show'); // Show a specific product
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Show form to edit a product
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update'); // Update a product
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy'); // Delete a product





// Route::get('/', function () {
//     return view('welcome');
// });
