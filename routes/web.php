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
/*Route::get('/home',home(){
return view("homepage");
});
Route::get('/about',function()
{
	return view("about");
});
Route::get('/contact',function()
{
	return view("contact");
});

Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/home','home@index');
Route::get('/about','about@index');
Route::get('/contact','contact@index');
Route::get('/','prof@homepage');



