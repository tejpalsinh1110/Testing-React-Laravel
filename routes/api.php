<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'getProducts']);
Route::get('/product/{id}', [ProductController::class, 'getProduct']);
Route::post('/product', [ProductController::class, 'addProduct']);
Route::get('/category/{category}', [ProductController::class, 'getByCategory']);
Route::get('/filter/topRated', [ProductController::class, 'getTopRated']);
Route::get('/filter/bestSellers', [ProductController::class, 'getBestSellers']);
// Specific routes must stay above the product/{list}
// Any static /product/* route placed after /{list} would be swallowed by the wildcard and never run
Route::get('/products/search', [ProductController::class, 'searchProducts']);
Route::get('/products/filterBy', [ProductController::class, 'filterProducts']);
Route::get('/products/{list}', [ProductController::class, 'listOfProducts']);