<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\userController;
use App\Http\Controllers\CustomerController;

Route::get('/' ,[AuthController::class, 'login']);

Route::post('/' ,[AuthController::class, 'Auth_login']);

Route::get('logOut' ,[AuthController::class, 'logOut']);



Route::group(['middleware' => 'userAdmin'], function () {

 Route::get('/dashboard' ,[DashboardController::class, 'index'])->name('dashboard');
//  Roles
    Route::get('/roles', [roleController::class, 'List']);
    Route::get('/roles/add', [roleController::class, 'add']);
    Route::post('/roles/add', [roleController::class, 'insert']);
    Route::get('/roles/edit/{id}', [roleController::class, 'edit']);
    Route::post('/roles/edit/{id}', [roleController::class, 'update']);
    Route::get('/roles/delete/{id}', [roleController::class, 'delete']);

    //Users
    Route::get('/Users/user', [userController::class, 'user']);
    Route::get('/Users/Add', [userController::class, 'Add']);
    Route::post('/Users/Add', [UserController::class, 'insert']);
    Route::get('/Users/edit/{id}', [UserController::class, 'edit']);
    Route::post('/Users/edit/{id}', [UserController::class, 'update']);
    Route::get('/Users/delete/{id}', [UserController::class, 'delete']);
    

//products
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/add', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products/add', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('/products/edit/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::get('/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/products/exportCSV', [ProductController::class, 'exportCSV'])->name('products.exportCSV');

    
//customers

Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index'); // List customers
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create'); // Show form to create customer
Route::post('/customers/add', [CustomerController::class, 'store'])->name('customers.store'); // Store new customer
Route::get('/customers/edit/{id}', [CustomerController::class, 'edit'])->name('customers.edit'); // Show form to edit customer
Route::post('/customers/edit/{id}', [CustomerController::class, 'update'])->name('customers.update'); // Update customer
Route::get('/customers/delete/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy'); // Delete customer
Route::get('/customers/exportCSV', [CustomerController::class, 'exportCSV'])->name('customers.exportCSV');

 

});

require __DIR__.'/auth.php';
