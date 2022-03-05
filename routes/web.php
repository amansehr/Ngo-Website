<?php

use App\Http\Controllers\Form;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Request;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function(){
    return view('home');
});


Route::get('/aboutYVCK', function(){
    return view('aboutYVCK');
});


Route::get('/aboutstructure', function(){
    return view('aboutstructure');
});


Route::get('/officialmember', function(){
    return view('officialmember');
});


Route::get('/photogallery', function(){
    return view('photogallery');
});


Route::get('/videogallery', function(){
    return view('videogallery');
});


/*Route::get('/RTI', function(){
    return view('RTI');
});*/


Route::get('/officeaddress', function(){
    return view('officeaddress');
});


Route::get('/contactdetails', function(){
    return view('contactdetails');
});

Route::get('/login', function(){
    return view('login');
});

/*Route::get('/profile', function(){
   return view('profile'); 
    
});*/

Route::group(['middleware'=>['userauth']],function(){
    Route::view('profile','profile');
    Route::view('pphotogallery','pphotogallery');
	Route::get('volunteer_show','App\Http\Controllers\volunteerController@show');
});


Route::post('loginform','App\Http\Controllers\Form@retrive');
Route::get('logout','App\Http\Controllers\Form@session_remove');
Route::post('Uploadimage','App\Http\Controllers\Form@uploadimg');

//Route::get('session_set','App\Http\Controllers\Form@session_set');

//Route::get('session_get','App\Http\Controllers\Form@session_get');

//Route::get('session_remove','App\Http\Controllers\Form@session_remove');

//Route::get('session_check','App\Http\Controllers\Form@session_check');



Route::get('volunteer_delete/{id}','App\Http\Controllers\volunteerController@destroy');
Route::get('volunteer_create','App\Http\Controllers\volunteerController@create');
Route::post('volunteer_submit','App\Http\Controllers\volunteerController@store'); 
Route::get('volunteer_edit/{id}','App\Http\Controllers\volunteerController@edit'); 
Route::post('volunteer_update/{id}','App\Http\Controllers\volunteerController@update')->name('volunteer.update');
