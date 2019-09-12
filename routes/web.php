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
Route::get('/doctorlogin', 'HomeController@doctorlogin')->name('doctorlogin');
Route::post('/doctorlogin', 'HomeController@doctorloginVerify');
Route::get('/signout', 'HomeController@signout')->name('signout');

Route::get('/patient', 'PatientController@index')->name('patient');
Route::get('/patient/doctor/{id}', 'PatientController@doctorlist')->name('patient.doctorlist');
Route::get('/patient/profile', 'PatientController@profile')->name('patient.profile');
Route::post('/patient/profile', 'PatientController@profileStore');
Route::get('/patient/notification', 'PatientController@notification')->name('patient.notification');
Route::get('/patient/archive', 'PatientController@archive')->name('patient.archive');
Route::get('patient/profile/search', 'PatientController@Password');
Route::get('patient/doctor/search', 'PatientController@DoctorSearch');
Route::get('patient/doctor/speciality', 'PatientController@Speciality');
Route::get('patient/doctor/location', 'PatientController@Location');
Route::get('patient/archive/search', 'PatientController@archiveSearch');

Route::get('/search', 'PatientController@search');

Route::get('/doctor', 'DoctorController@index')->name('doctor');
Route::get('doctor/pressIn/{id}', 'DoctorController@session');
Route::get('/doctor/disease/{id}', 'DoctorController@disease')->name('disease');
Route::get('/doctor/profile', 'DoctorController@profile')->name('doctor.profile');
Route::post('/doctor/profile', 'DoctorController@profileStore');
Route::get('/doctor/prescription', 'DoctorController@prescription')->name('doctor.prescription');
Route::post('/doctor/prescription', 'DoctorController@prescriptionStore');
Route::get('/doctor/patient', 'DoctorController@patient')->name('doctor.patient');
Route::get('/doctor/patient/{id}', 'DoctorController@patientListSingle')->name('patientlist.single');
Route::get('doctor/search', 'DoctorController@search');
Route::get('doctor/press/search', 'DoctorController@searchPatient');
Route::get('doctor/press/symptom', 'DoctorController@InsertSymptom');
Route::get('doctor/press/test', 'DoctorController@InsertTest');
Route::get('doctor/press/medicine', 'DoctorController@InsertMedicine');
Route::get('doctor/patient/search', 'DoctorController@PatientListSearch');
Route::get('doctor/profile/search', 'DoctorController@Password');

Route::get('/administrator', 'AdminController@index')->name('admin');
Route::get('/administrator/profile', 'AdminController@profile')->name('admin.profile');
Route::get('/administrator/notification', 'AdminController@notification')->name('admin.notification');
Route::get('/administrator/gallery', 'AdminController@gallery')->name('admin.gallery');
Route::get('/administrator/todo_list', 'AdminController@todo')->name('admin.todo');
Route::get('/administrator/doctorList', 'AdminController@doctor')->name('admin.doctorList');
Route::get('/administrator/patientList', 'AdminController@patient')->name('admin.patientList');
Route::get('/administrator/technicianList', 'AdminController@technician')->name('admin.technicianList');




Route::get('/logout', 'LogoutController@index')->name('logout');
