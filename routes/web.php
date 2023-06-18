<?php

use App\Http\Controllers\About\AboutControllers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\Home\HomeSlideController;
use App\Http\Controllers\PortfolioController;
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

    Route::get( '/multi/image', 'multiImage' )->name( 'multi.image' );
    Route::post( '/multi/image', 'storeMultiImage' )->name( 'multi.image' );
    Route::get( '/all/multi', 'allMultiImage' )->name( 'all.multi' );

    Route::get( '/multi/image/{id}', 'editMultiImage' )->name( 'edit.multi.image' );
    Route::post( '/multi/image/{id}', 'updateMultiImage' )->name( 'update.multi.image' );
    Route::get( '/delete/multi/image/{id}', 'deleteMultiImage' )->name( 'delete.multi.image' );

} );

//Portfolio all route
Route::controller( PortfolioController::class )->group( function () {
    Route::get( '/all/portfolios', 'allPortfolio' )->name( 'all.portfolio' );
    Route::get( '/add/portfolio', 'addPortfolio' )->name( 'add.portfolio' );
    Route::post( '/add/portfolio', 'storePortfolio' )->name( 'store.portfolio' );
    Route::get( '/edit/portfolio/{id}', 'editPortfolio' )->name( 'edit.portfolio' );
    Route::patch( '/edit/portfolio/{id}', 'updatePortfolio' )->name( 'update.portfolio' );
    Route::get( '/edit/portfolio/{id}', 'editPortfolio' )->name( 'edit.portfolio' );
    Route::get( '/delete/portfolio/{id}', 'deletePortfolio' )->name( 'delete.portfolio' );
    // Route::delete( '/delete/portfolio/{id}', 'deletePortfolio' )->name( 'delete.portfolio' );
    Route::get( '/portfolio/details/{id}', 'detailsPortfolio' )->name( 'portfolio.details' );
} );

//Blog Category all route
Route::controller( BlogCategoryController::class )->group( function () {
    Route::get( '/all/category', 'allCategory' )->name( 'all.category' );
    Route::get( '/add/category', 'addCategory' )->name( 'add.category' );
    Route::post( '/add/category', 'storeCategory' )->name( 'store.category' );
    Route::get( '/edit/category/{id}', 'editCategory' )->name( 'edit.category' );
    Route::patch( '/edit/category/{id}', 'updateCategory' )->name( 'update.category' );
    Route::get( '/delete/category/{id}', 'deleteCategory' )->name( 'delete.category' );
} );

require __DIR__ . '/auth.php';
