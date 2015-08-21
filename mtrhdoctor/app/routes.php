<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('login.index');
});

Route::post('loginform','logincontroller@login');



Route::resource('login','logincontroller');

Route::resource('book','bookcontroller');

Route::resource('consultation','consultationcontroller');

Route::resource('lab','labcontroller');

Route::resource('diagnosis','diagnosiscontroller');

Route::resource('payment','paymentcontroller');

Route::resource('pharmacy','pharmacycontroller');

Route::resource('admission','admissioncontroller');

Route::post('admitionform','admissioncontroller@show');

Route::resource('clearance','clearancecontroller');

Route::resource('numb','numbcontroller');



