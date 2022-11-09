<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage']);

Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//Show single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing (doesn't work for some reason: The DELETE method is not supported for this route. Supported methods: GET, HEAD, PUT.)
Route::delete('listing/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

//Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);



/*
Common Resource Routes:

index - Show all listings
show - Show single listing
create - Create new listing
store - Store new listing
edit - Show form to edit existing listing
update - Update listing
destroy - Delete listing
*/


/* Route::get('/hello', function () {
    return response('<h1>Hello World<h1/>')
    ->header('Content-Type', 'text/plain')
    ->header('foo', 'bar');
});

Route::get('/posts/{id}', function($id) {
    //dd($id); // Die & Dump (Debugging)
    //ddd($id); // Die & Dump & Debug (Debugging with more detail)
    return response('Post ' . $id);
})->where('id', '[0-9]+');

Route::get('search', function(Request $request) {
    // Get query parameters (url?name=Brad&city=Boston)
    dd($request->name . ' ' . $request->city);
}); */
