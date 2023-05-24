<?php

use App\Http\Controllers\About\AboutControllers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSlideController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get( '/', function () {
    return view( 'frontend.index' );
} );

//Admin Controller
Route::controller( AdminController::class )->group( function () {
    Route::get( '/admin/logout', 'destroy' )->name( 'admin.logout' );
    Route::get( '/admin/profile', 'Profile' )->name( 'admin.profile' );
    Route::get( '/edit/profile', 'editProfile' )->name( 'edit.profile' );
    Route::post( '/update/profile', 'updateProfile' )->name( 'update.profile' );
    Route::get( '/change/password', 'changePassword' )->name( 'change.password' );
    Route::post( '/change/password', 'updatePassword' )->name( 'update.password' );
} );

Route::get( '/dashboard', function () {
    return view( 'admin.index' );
} )->middleware( ['auth', 'verified'] )->name( 'dashboard' );

Route::middleware( 'auth' )->group( function () {
    Route::get( '/profile', [ProfileController::class, 'edit'] )->name( 'profile.edit' );
    Route::patch( '/profile', [ProfileController::class, 'update'] )->name( 'profile.update' );
    Route::delete( '/profile', [ProfileController::class, 'destroy'] )->name( 'profile.destroy' );
} );

//Home Slide Controller
Route::controller( HomeSlideController::class )->group( function () {
    Route::get( '/home/slide', 'homeSlide' )->name( 'home.slide' );
    Route::post( '/home/slide/{id}', 'homeSlideUpdate' )->name( 'update.slide' );
} );

//Home Slide Controller
Route::controller( AboutControllers::class )->group( function () {
    Route::get( '/about/info', 'aboutInfo' )->name( 'about.info' );
    Route::post( '/update/about/{id}', 'updateAbout' )->name( 'update.about' );
    Route::get( '/about', 'aboutPage' )->name( 'about.page' );
} );

require __DIR__ . '/auth.php';
