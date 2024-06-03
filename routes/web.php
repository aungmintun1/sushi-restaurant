<?php

use App\Http\Controllers\admin\CustomersController;
use App\Http\Controllers\admin\FoodItemsController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\Admin\FoodCategoriesController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;


// Static Pages
Route::get('/', [StaticPagesController::class, 'home']);
Route::get('/menu', [StaticPagesController::class, 'menu']);
Route::get('/menu/{slug}', [StaticPagesController::class, 'singleMenu']);
Route::get('/about', [StaticPagesController::class, 'about']);
Route::get('/reservations', [StaticPagesController::class, 'reservations']);
Route::get('/contact', [StaticPagesController::class, 'contact']);
Route::get('/offers', [StaticPagesController::class, 'offers']);

//food-categories
Route::get('/admin/food-categories', [FoodCategoriesController::class, 'index']);
Route::get('/admin/food-categories/create', [FoodCategoriesController::class, 'create']);
Route::post('/admin/food-categories/', [FoodCategoriesController::class, 'store']);
Route::get('/admin/food-categories/{id}/edit', [FoodCategoriesController::class, 'edit']);
Route::put('/admin/food-categories/{id}', [FoodCategoriesController::class, 'update']);
Route::delete('/admin/food-categories/{id}', [FoodCategoriesController::class, 'destroy']);

//food-items
Route::get('/admin/food-items', [FoodItemsController::class, 'index']);
Route::get('/admin/food-items/create', [FoodItemsController::class, 'create']);
Route::post('/admin/food-items', [FoodItemsController::class, 'store']);
Route::get('/admin/food-items/{id}/edit', [FoodItemsController::class, 'edit']);
Route::put('/admin/food-items/{id}', [FoodItemsController::class, 'update']);
Route::delete('/admin/food-items/{id}', [FoodItemsController::class, 'destroy']);

//Customers
Route::get('/admin/customers/offers-members', [CustomersController::class, 'allOffersMembers']);
Route::get('/admin/customers/reservations', [CustomersController::class, 'allReservations']);

//users
Route::get('/admin/users', [UsersController::class, 'index']);
Route::get('/admin/users/create', [UsersController::class, 'create']);
Route::post('/admin/users', [UsersController::class, 'store']);
Route::get('/admin/users/{id}/edit', [UsersController::class, 'edit']);
Route::put('/admin/users/{id}', [UsersController::class, 'update']);
Route::delete('/admin/users/{id}', [UsersController::class, 'destroy']);



//Admin
Route::get('/admin', [AdminController::class, 'dashboard']);

Route::get('admin/login', function () {
    return view('admin.login');
});

Route::get('admin/register', function () {
    return view('admin.register');
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


