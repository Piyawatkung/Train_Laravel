<?php

use App\Http\Controllers\BlogController;
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

Route::get( '/laravel/{id}', function ( $id ) {
    return 'laravel ' . $id;
} )->where( 'id', '[0-9]+' );

// Route::get( '/blog', 'BlogController@index' ); // ^7.xx

Route::resource( '/blog', 'BlogController' ); // ^7.xx

Route::resource( '/blog', BlogController::class ); // ^8.xx

// Route::get( '/blog', [BlogController::class, 'index'] ); // ^8.xx

// Route::get( '/blog/{id}', [BlogController::class, 'show'] )
//     ->name( 'blog.show' );

// Route::get( '/user', [userController::class, 'showUser'] );
