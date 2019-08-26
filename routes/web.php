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

/*Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/signup', function () {
    return view('signup');
});*/

//Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/', 'HomeController@verify');
Route::get('/about', 'HomeController@about');
Route::get('/pricing', 'HomeController@pricing');
Route::get('/signup', 'HomeController@signup');
Route::post('/signup', 'HomeController@store');
Route::get('/signout', 'HomeController@signout')->name('signout');

Route::get('/patient', 'PatientController@index')->name('patient');
Route::get('/patient/profile', 'PatientController@profile')->name('patient.profile');
Route::post('/patient/profile', 'PatientController@imageStore');
Route::post('/patient/profile#edit-profile', 'PatientController@profileStore');
Route::get('/patient/notification', 'PatientController@notification')->name('patient.notification');
Route::get('/patient/archive', 'PatientController@archive')->name('patient.archive');

Route::get('/search', 'PatientController@search');

Route::get('/doctor', 'DoctorController@index')->name('doctor');
Route::get('/doctor/profile', 'DoctorController@profile')->name('doctor.profile');
Route::get('/doctor/prescription', 'DoctorController@prescription')->name('doctor.prescription');
Route::get('/doctor/notification', 'DoctorController@notification')->name('doctor.notification');
Route::get('/doctor/patient', 'DoctorController@patient')->name('doctor.patient');

Route::get('/administrator', 'AdminController@index')->name('admin');
Route::get('/profile', 'AdminController@profile')->name('admin.profile');
Route::get('/notification', 'AdminController@notification')->name('admin.notification');
Route::get('/gallery', 'AdminController@gallery')->name('admin.gallery');
Route::get('/todo', 'AdminController@todo')->name('admin.todo');
Route::get('/calendar', 'AdminController@calendar')->name('admin.calendar');

Route::get('/logout', 'LogoutController@index')->name('logout');
