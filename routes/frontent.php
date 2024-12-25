<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstimateController;
use App\Http\Controllers\ContactQueryController;
use App\Http\Controllers\Frontend\FrontendController;


/*
 *
 * Frontend Routes
 *
 * --------------------------------------------------------------------
 */

// home route
Route::group(['as' => 'frontend.'], routes: function () {
    Route::get('/', action: [FrontendController::class, 'index'])->name('index');

    Route::view('/about', 'front.about')->name('about'); // About Us page
    Route::view('/services', 'front.services')->name('services'); // Services page
    Route::view('/gallery', 'front.gallery')->name('gallery'); // Gallery page
    Route::view('/career', 'front.career')->name('career'); // Career page
    Route::view('/contact-us', 'front.contact-us')->name('contact-us'); // Contact Us page
});

Route::get('/property/search', [EstimateController::class, 'search'])->name('property.search');

Route::post('/estimate', [EstimateController::class, 'store'])->name('estimate.submit');
Route::post('/contact', [ContactQueryController::class, 'store'])->name('contact.submit');
