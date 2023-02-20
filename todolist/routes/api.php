<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* Route for ItemController */

// All Items '/items' , efter the comma and pass it array[the controller we goin to use], now going to be specific function that we want this route to hit is "index"
// GET all
Route::get('/items', [ItemController::class, 'index']);
Route::prefix('item')->group(function () {
    // Create
    Route::post('store', [ItemController::class, 'store']);
    // Update
    Route::post('/{id}', [ItemController::class, 'update']);
    // Delete
    Route::post('store', [ItemController::class, 'store']);
});
