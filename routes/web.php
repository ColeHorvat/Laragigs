<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

//Show single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Store listing data
Route::post('/listings', [ListingController::class, 'store']);

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
