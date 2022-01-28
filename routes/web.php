<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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


// Route::get('/', function () {
//     return view('products.crud');
// });

Route::get('/', [ProductsController::class, 'showAll'])->name('showAll');
Route::post('/createProd', [ProductsController::class, 'createProd'])->name('createProd');
Route::post('/updateProd', [ProductsController::class, 'updateProd'])->name('updateProd');
Route::post('/deleteProd', [ProductsController::class, 'deleteProd'])->name('deleteProd');
