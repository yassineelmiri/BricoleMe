<?php

use App\Models\Claims;
use App\Models\Artisan;
use App\Models\Customer;
use App\Models\Requests;
use App\Models\Reservation;

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\InvoiceController;


use App\Http\Controllers\RequestController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\SocialMediaAuthController;



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



Route::get('/artisan{id}', [TestController::class, 'detail'])->name('artisan.detail');

Route::resource('client', ClientController::class);
Route::resource('artisan', ArtisanController::class);


// 
Route::group(['middleware' => 'role:artisan'], function () {
    Route::get('/ART', function () {

        return to_route('show.artisan', Auth::user()->id);
    })->name('artisan.dashboard');
});
// 

Route::get('/profission{id}', [TestController::class, 'test'])->name('show.profession');
Route::get('/ART{id}', [TestController::class, 'artisan'])->name('show.artisan');
Route::get('/CLT', [TestController::class, 'client'])->name('show.client');
Route::get('/Modifier{edit}', [TestController::class, 'edit'])->name('edit.artisan');
Route::put('/ART', [TestController::class, 'update'])->name('update.artisan');


Route::get('/login', [AuthenticationController::class, 'loginPage'])->name('login.view');
Route::get('/register/artisan', [AuthenticationController::class, 'artisanRegistrationPage'])->name('artisan.register.view');
Route::get('/register/customer', [AuthenticationController::class, 'customerRegistrationPage'])->name('customer.register.view');
Route::post('/auth/artisan/register', [AuthenticationController::class, 'artisanRegistration'])->name('artisan.register');

Route::post('/create-reservation', [ReservationController::class, 'create'])->name('create.reservation');
Route::post('/store-reservation', [ReservationController::class, 'store'])->name('store.reservation');


// Mohammed Joual la dernier Version 
Route::get('/auth/google', [SocialMediaAuthController::class, 'redirectToGoogle'])->name('auth.google');


Route::get('auth/facebook', [SocialMediaAuthController::class, 'redirectToFacebook'])->name('auth.facebook');
Route::get('auth/social/register/artisan', [SocialMediaAuthController::class, 'socialArtisanRegister'])->name('auth.social.register.artisan');
Route::get('auth/social/register/customer', [SocialMediaAuthController::class, 'socialCustomerRegister'])->name('auth.social.register.customer');


Route::post('auth/social/register/customer', [SocialMediaAuthController::class, 'socialCustomerRegistration'])->name('auth.social.customer.register');

Route::post('/auth/social/artisan/register', [SocialMediaAuthController::class, 'socialArtisanRegistration']);
Route::get('/auth/google/user/data', [SocialMediaAuthController::class, 'handleGoogleResponse'])->name('auth.google.data');
Route::get('/auth/facebook/user/data', [SocialMediaAuthController::class, 'handleFacebookResponse'])->name('auth.facebook.data');

Route::get('/auth/register/type', [SocialMediaAuthController::class, 'registerRedirect'])->name('auth.register.redirect');

Route::post('/login', [AuthenticationController::class, 'login'])->name('login');
Route::get('/log-out', [AuthenticationController::class, 'logout'])->name('log-out');

Route::get('/login', [AuthenticationController::class, 'loginPage'])->name('login.view');
Route::get('/register/artisan', [AuthenticationController::class, 'artisanRegistrationPage'])->name('artisan.register.view');
Route::get('/register/customer', [AuthenticationController::class, 'customerRegistrationPage'])->name('customer.register.view');
Route::post('/register/customer', [AuthenticationController::class, 'customerRegistration'])->name('customer.register');
Route::post('/auth/artisan/register', [AuthenticationController::class, 'artisanRegistration'])->name('artisan.register');




Route::get('/artisan/services', [ArtisanController::class, 'services'])->name('artisan.services');


Route::group(['middleware' => 'role:admin'], function (){

    Route::put('/Admin-requests/{request}/accept', [RequestController::class, 'accept'])->name('admin.requests.accept');
    Route::put('/Admin-requests/{request}/reject', [RequestController::class, 'reject'])->name('admin.requests.reject');

        Route::get('/Admin-stats', function () {
            $clients = Customer::all();
            $artisans = Artisan::all();
            $reservations =Reservation::all();
            $claims=Claims::all();
            $requests=Requests::all();

    return view('admin-dashboard.admin-statestiques', compact('clients', 'artisans', 'reservations', 'claims','requests'));
        })->name('admin.stats');

        Route::get('/Admin-requests', function () {

            $requests = Requests::with('artisan')->get();


            return view('admin-dashboard.admin-requests', compact('requests'));


        })->name('admin.requests');

        Route::get('/Admin-claims', function () {
            return view('admin-dashboard.admin-claims');
        })->name('admin.claims');



});


Route::group(['middleware' => 'role:customer'], function () {
    Route::get('/CLT', function () {
        $client = User::where('id', Auth::user()->id)->firstOrFail();
        return view('client.client', compact('client'));

    })->name('customer.dashboard');
});





Route::get('/create-reservation', [ReservationController::class, 'create'])->name('create.reservation');
Route::get('/display-res', [ReservationController::class, 'showReservations'])->name('display.reservation');
Route::post('/store-reservation', [ReservationController::class, 'store'])->name('store.reservation');
Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');
Route::post('/reservation/{id}/complete', [ReservationController::class, 'completeReservation'])->name('complete-reservation');
Route::get('/update-status', [ReservationController::class, 'updateStatus']);

Route::get('/invoice', [InvoiceController::class, 'generate']);


