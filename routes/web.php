<?php

use App\Http\Controllers\Demo\DemoControllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get( '/', function () {
    return view( 'welcome' );
} );
Route::controller( DemoControllers::class )->group( function () {
    Route::get( '/about', 'AboutPage' )->middleware( 'check' );
    Route::get( '/contact', 'ContactPage' )->name( 'contact.page' ); //Name route
} );
