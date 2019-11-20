<?php

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



Route::get('/index', function () {
    return view('Borrower/indexborrower');
});

Route::get('/editdataborrower', function () {
    return view('Borrower/editdataborrower');
});

Route::get('/book', function () {
    return view('Borrower/bookitem');
});

Route::get('/bookitem', function () {
    return view('Borrower/bookitemlist');
});

Route::resource('/booklist', BookItemController::class);

Route::resource('/bookitemdetail', BookItemDetailController::class);
Route::get('/borrowlist', function () {
    return view('Borrower/borrowlist');
});

Route::get('/borrowlistdetail', function () {
    return view('Borrower/borrowlistdetail');
});

Route::get('/admin', function () {
    return view('Officer/indexofficer');
});

Route::get('/adminedit', function () {
    return view('Officer/editdataofficer');
});

Route::get('/waititem', function () {
    return view('Officer/waititem');
});

Route::get('/waititemdetail', function () {
    return view('Officer/waititemdetail');
});

Route::get('/borrowandbackitem', function () {
    return view('Officer/borrowandbackitem');
});

Route::get('/borrowandbackitemdetail', function () {
    return view('Officer/borrowandbackitemdetail');
});


Route::resource('/typeitem', ItemTypeController::class);
Route::resource('/itemdata', ItemParcelController::class);


Route::get('/adduser', function () {
    return view('Officer/adduser');
});

Route::get('/borrowermange', 'BorrowerController@index');
Route::get('/management/user', 'BorrowerController@create');
Route::post('/core', 'BorrowerController@core');


Route::get('/officermanage', function () {
    return view('Officer/officermanage');
});

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
});
