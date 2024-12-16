<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstimateController;
use App\Http\Controllers\Frontend\FrontendController;


/*
 *
 * Frontend Routes
 *
 * --------------------------------------------------------------------
 */

// home route
Route::get('home', [FrontendController::class, 'index'])->name('home');

Route::group(['as' => 'frontend.'], function () {

    // Static Pages
    Route::view('/', 'front.index')->name('home'); // Home page
    Route::view('/about', 'front.about')->name('about'); // About Us page
    Route::view('/services', 'front.services')->name('services'); // Services page
    Route::view('/gallery', 'front.gallery')->name('gallery'); // Gallery page
    Route::view('/career', 'front.career')->name('career'); // Career page
    Route::view('/blog', 'front.blog')->name('blog'); // Blog page
    Route::view('/contact-us', view: 'front.contact-us')->name('contact-us'); // Contact Us page

    // Listed Properties
    Route::prefix('properties')->group(function () {
        Route::view('/residential', view: 'front.properties.residential')->name('properties.residential'); // Residential properties
        Route::view('/commercial', 'front.properties.commercial')->name('properties.commercial'); // Commercial properties
    });
});


Route::post('/estimate', [EstimateController::class, 'submitForm'])->name('estimate.submit');
