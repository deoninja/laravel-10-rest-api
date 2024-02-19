<?php

use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\InvoiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->prefix('v1')->group(function () {
    Route::apiResource('/customers', CustomerController::class);
    Route::apiResource('/invoices', InvoiceController::class);

    // Route::post('/invoices/bulk', ['uses' => 'InvoiceController@bulkStore']);
    Route::post('/invoices/bulk', [InvoiceController::class, 'bulkStore']);
});

















// // api/v1
// Route::group(['prefex' => 'v2', 'namespace' => 'App\Http\Controllers\Api\V2'], function() {
//     Route::apiResource('/customers', CustomerController::class);
//     Route::apiResource('/invoices', InvoiceController::class);
// });

