<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('customers', [CustomerController::class, 'index'])->name('customer.index');
Route::get('customers/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('customers', [CustomerController::class, 'store'])->name('customer.store');
Route::get('customers/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('customers/{id}/update', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('customers', [CustomerController::class, 'destroy'])->name('customer.destroy');