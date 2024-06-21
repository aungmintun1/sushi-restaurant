<?php

use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\FoodItemsController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UsersController;
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
Route::get('/contact', [StaticPagesController::class, 'contact']);

Route::get('/offers', [StaticPagesController::class, 'offers']);
Route::post('/offers', [StaticPagesController::class, 'registerMember']);
Route::get('/offers/thank-you', [StaticPagesController::class, 'thankYou']);

Route::get('/reservations', [StaticPagesController::class, 'reservations']);
Route::post('/reservations', [StaticPagesController::class, 'saveReservation']);
Route::get('/reservations/thank-you', [StaticPagesController::class, 'thankYou']);

//food-categories
Route::get('/admin/food-categories', [FoodCategoriesController::class, 'index']);
Route::get('/admin/food-categories/create', [FoodCategoriesController::class, 'create'])->middleware('role:Admin');
Route::post('/admin/food-categories/', [FoodCategoriesController::class, 'store']);
Route::get('/admin/food-categories/{id}/edit', [FoodCategoriesController::class, 'edit'])->middleware('role:Admin');
Route::put('/admin/food-categories/{id}', [FoodCategoriesController::class, 'update']);
Route::delete('/admin/food-categories/{id}', [FoodCategoriesController::class, 'destroy'])->middleware('role:Admin');

//food-items
Route::get('/admin/food-items', [FoodItemsController::class, 'index']);
Route::get('/admin/food-items/results', [FoodItemsController::class, 'search']);
Route::get('/admin/food-items/create', [FoodItemsController::class, 'create'])->middleware('role:Admin');
Route::post('/admin/food-items', [FoodItemsController::class, 'store']);
Route::get('/admin/food-items/{id}/edit', [FoodItemsController::class, 'edit'])->middleware('role:Admin');
Route::put('/admin/food-items/{id}', [FoodItemsController::class, 'update']);
Route::delete('/admin/food-items/{id}', [FoodItemsController::class, 'destroy'])->middleware('role:Admin');

//Customers
Route::get('/admin/customers/offers-members', [CustomersController::class, 'allOffersMembers']);
Route::get('/admin/customers/reservations', [CustomersController::class, 'allReservations']);


//Members
Route::get('/admin/members', [MemberController::class, 'index']);
Route::delete('/admin/members/{id}', [MemberController::class, 'destroy']);

//Reservations
Route::get('/admin/reservations', [ReservationController::class, 'index']);
Route::get('/admin/reservations/create', [ReservationController::class, 'create']);
Route::post('/admin/reservations', [ReservationController::class, 'store']);
Route::delete('/admin/reservations/{id}', [ReservationController::class, 'destroy']);

//users
Route::get('/admin/users', [UsersController::class, 'index']);
Route::get('/admin/users/create', [UsersController::class, 'create']);
Route::post('/admin/users', [UsersController::class, 'store']);
Route::get('/admin/users/{id}/edit', [UsersController::class, 'edit']);
Route::put('/admin/users/{id}', [UsersController::class, 'update']);
Route::delete('/admin/users/{id}', [UsersController::class, 'destroy']);

//SEO
Route::get('/admin/settings/general', [SettingController::class, 'general']);


//Admin
Route::get('/admin', [AdminController::class, 'dashboard']);
Route::get('/admin/dailyRevenueLast30', [AdminController::class, 'dailyRevenueLast30']);

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


