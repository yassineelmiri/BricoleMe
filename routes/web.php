<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\TestController;

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ReservationController;

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
    return view('index');

})->name('home');
Route::get('/Admin-Dash', function () {
    return view('admin-dashboard');
});

Route::get('/Admin-stats', function () {
    return view('admin-dashboard.admin-statestiques');
})->name('admin.stats');

Route::get('/Admin-requests', function () {
    return view('admin-dashboard.admin-requests');
})->name('admin.requests');

Route::get('/Admin-claims', function () {
    return view('admin-dashboard.admin-claims');
})->name('admin.claims');


Route::get('/artisan/detail', [TestController::class, 'index'])->name('artisan.detail');

Route::resource('client', ClientController::class);
Route::resource('artisan', ArtisanController::class);

Route::get('/profission', [TestController::class, 'test'])->name('show.profession');
Route::get('/ART', [TestController::class, 'artisan'])->name('show.artisan');
Route::get('/CLT', [TestController::class, 'client'])->name('show.client');
Route::get('/edit', [TestController::class, 'edit'])->name('edit.artisan');


Route::get('/login', [AuthenticationController::class, 'loginPage'])->name('login.view');
Route::get('/register/artisan', [AuthenticationController::class, 'artisanRegistrationPage'])->name('artisan.register.view');
Route::get('/register/customer', [AuthenticationController::class, 'customerRegistrationPage'])->name('customer.register.view');
Route::post('/auth/artisan/register', [AuthenticationController::class, 'artisanRegistration'])->name('artisan.register');

Route::get('/create-reservation', [ReservationController::class, 'create'])->name('create.reservation');
Route::post('/store-reservation', [ReservationController::class, 'store'])->name('store.reservation');



