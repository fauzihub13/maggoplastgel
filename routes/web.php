<?php

use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view(view: 'pages.home');
// });

Route::domain(env('APP_DOMAIN', "maggoplastgel.test"))->group(function () {
    Route::controller(GeneralController::class)->group(function() {
        Route::get('/', 'home')->name('user.home');
        Route::get('/about-us', 'aboutUs')->name('user.about-us');
        Route::get('/team', 'team')->name('user.team');
        Route::get('/faq', 'faq')->name('user.faq');
        Route::get('/contact-us', 'contactUs')->name('user.contact-us');
        Route::get('/blog', 'blog')->name('user.blog');
        Route::get('/blog/detail', 'blogDetail')->name('user.blog.detail');
    });
});

Route::domain('admin.' . env('APP_DOMAIN', "maggoplastgel.test"))->group(function () {
    Route::get('/', function () {
        return 'Admin sub domain';
    });
});
