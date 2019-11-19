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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function (){
    return view('Borrower/indexborrower');
});

Route::get('/editdataborrower', function (){
    return view('Borrower/editdataborrower');
});

Route::get('/book', function (){
    return view('Borrower/bookitem');
});

Route::get('/bookitem', function (){
    return view('Borrower/bookitemlist');
});

Route::get('/booklist', function (){
    return view('Borrower/booklist');
});

Route::get('/bookitemdetail', function (){
    return view('Borrower/bookitemdetail');
});

Route::get('/borrowlist', function (){
    return view('Borrower/borrowlist');
});

Route::get('/borrowlistdetail', function (){
    return view('Borrower/borrowlistdetail');
});