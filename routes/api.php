<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
| ItemController bookitemdetail BorrowItemController ItemTypeController
*/ 

Route::resource('/item', ItemController::class);
Route::resource('/testlist', BookItemController::class);
Route::resource('/bookitemdetails', BookItemDetailController::class);
Route::resource('/borrowitem', BorrowItemController::class);
Route::resource('/itemtype', ItemTypeController::class);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
