<?php

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::redirect('/redirect','/redirect2');


/*
Route::get('/cat/{cat}/post/{posts}', function($cat,$posts){
    return "ID".$cat.$posts;
});
*/

Route::view('/coder','welcome'); 
Route::get('/view', function(){
      return view('welcome');
});



Route::get('/cat/{cat?}', function($cat = ''){
    return "ID".$cat;
});


Route::get('redirect1', function(){
     return redirect('/redirect2');
});

Route::get('/redirect2', function(){
    return 'Olá seja bem vindo ao redirect2';
});
