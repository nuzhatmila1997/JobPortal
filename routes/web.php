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
    return view('homepage');
});

Auth::routes(['verify'=> True]);
Route::get('/jobs', 'JobController@index')->middleware('auth')->middleware('verified');
Route::post('/jobs/store','JobController@store')->middleware('auth');
Route::get('/search','JobController@searchwithform');
Route::get('/jobs/showjoblist', 'JobController@search')->middleware('auth');
Route::get('/jobs/viewjobs', 'JobController@viewjobs');
Route::get('/jobs/show/{id}', 'JobController@show');
Route::get('/jobs/afterremovejoblist/{id}','JobController@destroy')->middleware('auth');
Route::get('/jobs/editinfo/{id}', 'JobController@edit')->middleware('auth');
Route::get('/jobs/apply/{id}', 'JobApplicationController@applyform')->middleware('auth');
Route::post('/jobs/{id}/apply','JobApplicationController@apply');
Route::get('/jobs/viewapplications/{id}','JobApplicationController@viewapplications');
Route::get('/jobs/viewresume/{id}','JobApplicationController@viewresume');
Route::post('/jobs/update/{id}', 'JobController@update')->middleware('auth');
Route::get('/jobs/myjobs', 'JobController@my_jobs')->middleware('auth');
Route::get('/home','HomeController@index');
Route::post('/upload_avatar', 'HomeController@uploadAvatar')->middleware('auth');
Route::get('/logout', function () {
	Auth::logout();
    return redirect('/');
});




